<?php

require_once __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ . '/../config/routes.php';
$router = new \App\Router($routes);
$router->handleRequest();
?>
