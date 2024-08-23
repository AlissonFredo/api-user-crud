<?php

namespace app\core;

use app\core\Router;
use app\controllers\UserController;

class Main
{
    static function initialize()
    {
        $router = new Router();

        $router->addRoute("GET", "/users/show", UserController::class, "show");
        $router->addRoute("GET", "/users/list", UserController::class, "list");
        $router->addRoute("POST", "/users", UserController::class, "create");
        $router->addRoute("PUT", "/users", UserController::class, "update");
        $router->addRoute("DELETE", "/users", UserController::class, "destroy");

        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $router->dispatch($method, $uri);
    }
}
