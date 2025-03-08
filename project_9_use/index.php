<?php

// composer require anjas/php-router:dev-main@dev

require_once './vendor/autoload.php';

use Anjas\PhpRouter\Router;

Router::handle('GET', '/lorem', './index.php');
Router::handle('GET', '/test', './test.php');
Router::get('/contact', './contact.php');
Router::get('/about', function () {
    echo 'about.php';
});