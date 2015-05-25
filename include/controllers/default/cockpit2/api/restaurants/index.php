<?php

class Controller_api_restaurants extends Crunchbutton_Controller_Rest {

	public function init() {
		// sub queries for special cases

		switch (c::getPagePiece(2)) {
			// list of restaurants that were already paid
			case 'paid-list':
				$restaurants = Crunchbutton_Restaurant::q( 'SELECT DISTINCT(r.id_restaurant) AS id_restaurant, r.name  FROM restaurant r
																			INNER JOIN payment p ON p.id_restaurant = r.id_restaurant
																		ORDER BY r.name ASC' );
				$export = [];
				$export[] = array( 'id_restaurant' => 0, 'name' => 'All' );
				foreach( $restaurants as $restaurant ){
					$export[] = array( 'id_restaurant' => $restaurant->id_restaurant, 'name' => $restaurant->name );
				}
				echo json_encode( $export );
				break;

			case 'eta':

				$out = [];
				$restaurants = Crunchbutton_Restaurant::q( 'SELECT * FROM restaurant WHERE active = true AND delivery_service = true ORDER BY name ' );
				$communities = [];

				foreach( $restaurants as $restaurant ){
					if( $restaurant->open() ){
						$community = $restaurant->community()->get( 0 );
						if( !$communities[ $community->id_community ] ){
							$query = '
								SELECT o.* FROM `order` o
								INNER JOIN restaurant r ON r.id_restaurant = o.id_restaurant
								INNER JOIN restaurant_community rc ON rc.id_restaurant = r.id_restaurant AND rc.id_community = ?
								WHERE o.delivery_type = ?
									AND o.delivery_service = true
									AND o.date >= now() - INTERVAL 1 DAY
								ORDER BY o.id_order DESC
							';
							$orders = Order::q($query, [$community->id_community, Crunchbutton_Order::SHIPPING_DELIVERY]);
							$activeDrivers = $restaurant->activeDrivers();
							$communities[ $community->id_community ] = [ 'name' => $community->name, 'activeDrivers' => $activeDrivers, 'orders' => $orders ];
						}
						$params = [ 'id_community' => $community->id_community, 'activeDrivers' => $communities[ $community->id_community ][ 'activeDrivers' ], 'orders' => $communities[ $community->id_community ][ 'orders' ] ];
						$out[] = array_merge( [ 'restaurant' => $restaurant->name, 'community' => $community->name ], $restaurant->smartETA( true, $params) );
					}
				}
				echo json_encode( $out );exit;
				break;
			// Simple list returns just the name and id
			case 'list':
				$restaurants = Crunchbutton_Restaurant::active();
				$export = [];
				foreach( $restaurants as $restaurant ){
					$export[] = array( 'id_restaurant' => $restaurant->id_restaurant, 'name' => $restaurant->name );
				}
				echo json_encode( $export );
				break;

			case 'no-payment-method':
				$restaurants = Crunchbutton_Restaurant::with_no_payment_method();
				$export = [];
				foreach( $restaurants as $restaurant ){
					$export[] = array( 'id_restaurant' => $restaurant->id_restaurant, 'name' => $restaurant->name );
				}
				echo json_encode( $export );
				break;

			default:
				// the main query for the list view
				$this->_query();
				break;
		}
	}

	private function _query() {

		$limit = $this->request()['limit'] ? $this->request()['limit'] : 20;
		$search = $this->request()['search'] ? $this->request()['search'] : '';
		$page = $this->request()['page'] ? $this->request()['page'] : 1;
		$status = $this->request()['status'] ? $this->request()['status'] : 'all';
		$community = $this->request()['community'] ? $this->request()['community'] : null;
		$getCount = $this->request()['fullcount'] && $this->request()['fullcount'] != 'false' ? true : false;
		$keys = [];

		if ($page == 1) {
			$offset = '0';
		} else {
			$offset = ($page-1) * $limit;
		}

		$q = '
			SELECT
				-WILD-
			FROM restaurant
			LEFT JOIN `order` ON restaurant.id_restaurant=`order`.id_restaurant
		';
		if ($community) {
			$q .= '
				LEFT JOIN restaurant_community ON restaurant.id_restaurant=restaurant_community.id_restaurant
			';
		}
		$q .='
			WHERE
				restaurant.name IS NOT NULL
		';

		if ($status != 'all') {
			$q .= '
				AND active=?
			';
			$keys[] = $status == 'active' ? true : false;
		}

		if ($community) {
			$q .= '
				AND restaurant_community.id_community=?
			';
			$keys[] = $community;
		}

		if ($search) {
			$s = Crunchbutton_Query::search([
				'search' => stripslashes($search),
				'fields' => [
					'restaurant.name' => 'like',
					'restaurant.address' => 'like',
					'restaurant.phone' => 'like',
					'restaurant.community' => 'like',
					'restaurant.permalink' => 'like',
					'restaurant.id_restaurant' => 'liker'
				]
			]);
			$q .= $s['query'];
			$keys = array_merge($keys, $s['keys']);
		}

		$q .= '
			GROUP BY restaurant.id_restaurant
		';

		$count = 0;

		// get the count
		if ($getCount) {
			$r = c::db()->query(str_replace('-WILD-','COUNT(DISTINCT `restaurant`.id_restaurant) as c', $q), $keys);
			while ($c = $r->fetch()) {
				$count = $c->c;
			}
		}

		$q .= '
			ORDER BY restaurant.name ASC
			LIMIT ?
			OFFSET ?
		';
		$keys[] = $getCount ? $limit : $limit+1;
		$keys[] = $offset;

		// do the query
		$data = [];
		$r = c::db()->query(str_replace('-WILD-','
			restaurant.*,
			(SELECT `order`.date FROM `order` WHERE `order`.id_restaurant = restaurant.id_restaurant order by `order`.date desc limit 1) as _order_date,
			COUNT(`order`.id_order) orders
		', $q), $keys);

		// this method seems like 8% slower for some reason
		//SELECT MAX(`order`.date) FROM `order` WHERE `order`.id_restaurant = restaurant.id_restaurant

		$i = 1;
		$more = false;

		while ($s = $r->fetch()) {

			if (!$getCount && $i == $limit + 1) {
				$more = true;
				break;
			}

			$restaurant = Restaurant::o($s);
			$out = $s;
			$out->delivery_it_self = $restaurant->deliveryItSelf();
			$out->communities = [];
			foreach ($restaurant->communities() as $community) {
				$out->communities[] = $community->properties();
			}

			$out->active = $out->active ? true : false;
			$out->open_for_business = $out->open_for_business ? true : false;
			$out->open = $restaurant->open() ? true : false;
			$out->delivery_service = $out->delivery_service ? true : false;
			$out->delivery = $out->delivery ? true : false;
			$out->takeout = $out->takeout ? true : false;


/*
			$unset = ['email','timezone','testphone','txt'];
			foreach ($unset as $un) {
				unset($staff[$un]);
			}
*/
			$data[] = $out;
//			$data[] = $s;
			$i++;
		}

		echo json_encode([
			'more' => $getCount ? $pages > $page : $more,
			'count' => intval($count),
			'pages' => $pages,
			'page' => intval($page),
			'results' => $data
		]);
	}
}