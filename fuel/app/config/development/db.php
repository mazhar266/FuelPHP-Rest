<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type'        => 'pdo',
		'connection'  => array(
			'dsn'      => 'sqlite:../sqlite.db',
			'username' => '',
			'password' => '',
		),
		'charset'  => NULL,
	),
);
