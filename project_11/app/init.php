<?php

// echo "init";

require_once "Router.php";

Router::get('/test', 'TestController', 'index');
Router::get('/test/show', 'TestController', 'show');

Router::get('/products', 'ProductController', 'index');
Router::post('/products', 'ProductController', 'store');
Router::get('/products/create', 'ProductController', 'create');
Router::get('/products/{id}', 'ProductController', 'show');
Router::put('/products/{id}', 'ProductController', 'update');
Router::delete('/products/{id}', 'ProductController', 'destroy');