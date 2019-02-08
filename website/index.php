<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

use Slim\Slim;

$app = new Slim/Slim();

$app->get('/hello/;name' , function($name){
	echo "hello " . $name;
});

$app->run();