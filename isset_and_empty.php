<?php

// isset, is it exists
$name = 'lorem';
var_dump(isset($name)); // true

$name = '';
var_dump(isset($name)); // true

$name = null;
var_dump(isset($name)); // false

// empty, is it not exists
$name = false;
var_dump(empty($name)); // true

$name = '';
var_dump(empty($name)); // true

$name = 'lorem';
var_dump(empty($name)); // false

// not empty
$name = 'lorem';
var_dump(!empty($name)); // true

if (!empty($username) && !empty($password)) {
    // login
} else {
    // show error
}

$rating = 0;
if (!empty($rating)) {
    // add to db
} else {
    // show error
}