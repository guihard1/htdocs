<?php
require_once __DIR__ . '/../controllers/HomeController.php';
require_once __DIR__ . '/../controllers/NoticiasController.php';

class Router {

    public function dispatch($url) {
        $url = trim($url, '/');

        $parts = $url ? explode('/', $url) : [];

        $controllerName = $parts[0] ?? 'Home';

        $controllerName = ucfirst($controllerName) . 'Controller';
        $controller = new $controllerName();

        $controller->index();
    }
}