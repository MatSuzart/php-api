<?php
require 'environment.php';
global $config;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/mvc-api/");
	$config['dbname'] = 'api';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	$config['jwt_secret_key'] = "abC123!";
} else {
	define("BASE_URL", "http://localhost/mvc-api/");
	$config['dbname'] = 'api';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	$config['jwt_secret_key'] = "abC123!";
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}