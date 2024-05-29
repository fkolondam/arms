<!-- app/Views/index.php -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once '../config/routes.php';
require_once '../app/init.php';

$url = $_GET['url'] ?? '';
$controllerName = $routes[$url] ?? 'HomeController@index';
list($controller, $method) = explode('@', $controllerName);

$controller = "App\\Controllers\\{$controller}";
if (class_exists($controller)) {
    $controllerInstance = new $controller;
    $controllerInstance->$method();
} else {
    $errorController = new App\Controllers\ErrorController();
    $errorController->notFound();
}

?>