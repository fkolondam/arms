<?php

namespace App;

class Router
{
    private $routes;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function handleRequest()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestUri = strtok($requestUri, '?'); // Remove query string

        if (isset($this->routes[$requestUri])) {
            list($controller, $method) = explode('@', $this->routes[$requestUri]);
            $controller = "App\\Controllers\\$controller";
            if (class_exists($controller) && method_exists($controller, $method)) {
                $controllerInstance = new $controller();
                $controllerInstance->$method();
            } else {
                echo "Error: Controller or method not found.";
            }
        } else {
            echo "Error: Route not found.";
        }
    }
}
?>
