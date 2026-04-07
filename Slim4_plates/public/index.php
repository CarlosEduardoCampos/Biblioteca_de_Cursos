<?php
session_start();
// Framework
use Slim\Factory\AppFactory;

require __DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR .'vendor'. DIRECTORY_SEPARATOR .'autoload.php';

$app = AppFactory::create();

$routes = require_once('../app/routes/routes.php');
$routes($app);

$app->run();
?>