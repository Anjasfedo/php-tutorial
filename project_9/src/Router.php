<?php

namespace Anjas\PhpRouter;

class Router
{
    public static function handle($method = 'GET', $path = '/', $filename = '')
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
            if (is_callable($filename)) {
                $filename();
            } else {
                require_once $filename;
            }
            exit();
        }

        return false;
    }

    public static function get($path, $filename)
    {
        self::handle('GET', $path, $filename);
    }

    public static function post($path, $filename)
    {
        self::handle('POST', $path, $filename);
    }

    public static function put($path, $filename)
    {
        self::handle('PUT', $path, $filename);
    }

    public static function delete($path, $filename)
    {
        self::handle('DELETE', $path, $filename);
    }

    public static function patch($path, $filename)
    {
        self::handle('PATCH', $path, $filename);
    }

    public static function options($path, $filename)
    {
        self::handle('OPTIONS', $path, $filename);
    }

    public static function head($path, $filename)
    {
        self::handle('HEAD', $path, $filename);
    }
}