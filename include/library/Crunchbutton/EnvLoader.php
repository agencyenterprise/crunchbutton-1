<?php
/**
  * Loads env into the config array so we can define them dynamically
  * @todo: remove all references to the config functions and just use env vars
*/

class Crunchbutton_EnvLoader {
	public static function load() {
		$map = [
			'TESTING_KEY' => 'test.key',
			'ENCRYPTION_KEY' => 'crypt.key'
		];
		$config = c::config();

		foreach ($map as $key => $value) {
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

		c::config($config);
	}
}