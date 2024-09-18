<?php

// start the session
session_start();

// create
$_SESSION['key'] = 'value';

// read
function readSessions()
{
    if (isset($_SESSION['key'])) {
        echo $_SESSION['key'];
    } else {
        echo 'key not found';
    }
}

readSessions();

// update
$_SESSION['key'] = 'new value';

readSessions();

// delete
// unset($_SESSION['key']);

session_unset();
session_destroy();

readSessions();

// 