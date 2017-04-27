<?php
/**
  * Loads env into the config array so we can define them dynamically
  * @todo: remove all references to the config functions and just use env vars
*/

class Crunchbutton_EnvLoader {
	public static function load() {
		$map = [
			'ENCRYPTION_KEY' => 'crypt.key',
			'PHAXIO_KEY' => ['phaxio.live.key', 'phaxio.dev.key'],
			'PHAXIO_SECRET' => ['phaxio.live.secret', 'phaxio.dev.secret'],
			'TWILIO_SID' => ['twilio.live.sid', 'twilio.dev.sid'],
			'TWILIO_TOKEN' => ['twilio.live.token', 'twilio.dev.token'],
			'TWILIO_HOSTNAME' => ['twilio.live.hostname', 'twilio.dev.hostname'],
			'STRIPE_PUBLIC' => ['stripe.live.public', 'stripe.dev.public'],
			'STRIPE_SECRET' => ['stripe.live.secret', 'stripe.dev.secret'],
			'S3_KEY' => 's3.key',
			'S3_SECRET' => 's3.secret'
		];
		$config = c::config();

		foreach ($map as $key => $values) {
			if (!is_array($values)) {
				$values = [$values];
			}

			foreach ($values as $value) {
				$parts = explode('.', $value);
				$field = $config;

				// dont acidently set root element
				if (!$parts[0]) {
					return;
				}

				foreach ($parts as $k => $part) {
					if ($k == count($parts)-1) {
						$field->{$part} = $_ENV[$key];
						break;
					}

					if (!$field->{$part}) {
						$field->{$part} = new Cana_Model;
					}
					$field = $field->{$part};
				}
			}
		}

		c::config($config);
	}
}