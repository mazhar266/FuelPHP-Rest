<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'default' => array(
		'type'        => 'pdo',
		'connection'  => array(
			'dsn'      => 'sqlite:/sqlite.db',
			'username' => '',
			'password' => '',
		),
		'charset'  => NULL,
    ),
);
