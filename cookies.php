<?php

// create, before any html tag
$expires = time() + (60 * 60 * 24 * 30);
setcookie('test', 'value', $expires, '/', 'php-tutorial.test', false, true);

// read
function readCookies()
{
    if (isset($_COOKIE['test'])) {
        echo $_COOKIE['test'];
    } else {
        echo 'cookies not found';
    }
}
readCookies();

// update
setcookie('test', 'new value', $expires, '/', 'php-tutorial.test', false, true);

readCookies();

// delete
setcookie('test', '', time() - 3600, '/', 'php-tutorial.test', false, true);

readCookies();

// security
// dont save sensitive data on cookies, like passwords