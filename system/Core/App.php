<?php

namespace Lieurcode\System\Core;

class App {
    public function run() {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, '/');

        if ($uri === '') {
            $controllerName = 'Lieurcode\\Controllers\\HomeController';
            $method = 'index';
        } else {
            $segments = explode('/', $uri);
            $controllerName = 'Lieurcode\\Controllers\\' . ucfirst($segments[0]) . 'Controller';
            $method = $segments[1] ?? 'index';
        }

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $method)) {
                return $controller->$method();
            } else {
                echo "Method $method tidak ditemukan di $controllerName";
            }
        } else {
            echo "Controller $controllerName tidak ditemukan.";
        }
    }
}
