<?php

class Router
{
    public static function handle($method = 'GET', $path = '/', $controller = '', $action = 'index')
    {
        // print_r($_SERVER);
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];

        if ($currentMethod != $method) {
            return false;
        }

        $root = '';

        $pattern = '#^' . $root . $path . '$#siD';

        if (preg_match($pattern, $currentUri)) {
            if (is_callable($controller)) {
                $controller();
            } else {
                require_once "../controllers/" . $controller . ".php";

                $controller = new $controller;
                $controller->$action();
            }
            exit();
        }

        return false;
    }

    public static function get($path, $controller, $action)
    {
        self::handle('GET', $path, $controller, $action);
    }

    public static function post($path, $controller, $action)
    {
        self::handle('POST', $path, $controller, $action);
    }

    public static function put($path, $controller, $action)
    {
        self::handle('PUT', $path, $controller, $action);
    }

    public static function delete($path, $controller, $action)
    {
        self::handle('DELETE', $path, $controller, $action);
    }

    public static function patch($path, $controller, $action)
    {
        self::handle('PATCH', $path, $controller, $action);
    }

    public static function options($path, $controller, $action)
    {
        self::handle('OPTIONS', $path, $controller, $action);
    }

    public static function head($path, $controller, $action)
    {
        self::handle('HEAD', $path, $controller, $action);
    }
}