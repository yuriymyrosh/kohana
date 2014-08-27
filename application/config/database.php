<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array(
		'type'       => 'PDO',
		'connection' => array(
			'dsn'        => 'mysql:host=localhost;dbname=test',
			'username'   => 'root',
			'password'   => 'password',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	)
);

?>