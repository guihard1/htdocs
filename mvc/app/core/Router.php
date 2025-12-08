<?php

class Router {

    public function dispatch($url) {
        $url = trim($url, '/');

        $parts = $url ? explode('/', $url) : [];

        $controllerName = $parts[0] ?? 'Home';

        $controllerName = ucfirst($controllerName) . 'Controller';

        echo 'url: ' . var_dump($parts);
        echo '<hr>';
        echo 'controller: ' . $controllerName;
    }
}