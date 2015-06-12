<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');

return array(
	'dbtype' => '1',
	'database'=> array(
		'mysql' => array(
			'host' => 'localhost' ,
			'port' => '3306' ,
			'user' => 'root' ,
			'pass' => 'root' ,
			'dbname' => 'shopcz' ,
			'charset' => 'utf8',
			'prefix' => 'cz_',
			),
		'pdo_mysql' =>array(
			'dsn' => 'mysql:host=localhost;port=3306;dbname=shopcz', 
			'user'=> 'root',
			'pass'=> 'root',
			'driver_options' =>array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8'),
			'prefix'=>'cz_',
			 ),
		)
	);