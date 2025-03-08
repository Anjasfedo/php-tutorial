<?php

require_once 'Router.php';

use Project_7\Router;

Router::handle('GET', '/lorem', './index.php');
Router::handle('GET', '/contact', './contact.php');

echo 'index.php';