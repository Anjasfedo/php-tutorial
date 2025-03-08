<?php

// validation

// filter
$email = "t9Wt1@example.com";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format" . PHP_EOL;
} else {
    echo "Valid email format" . PHP_EOL;
}

$url = "https://www.example.com";

if (!filter_var($url, FILTER_VALIDATE_URL)) {
    echo "Invalid url format" . PHP_EOL;
} else {
    echo "Valid url format" . PHP_EOL;
}

// sanitizing
$variable = '<p>Hello</p>';
$flag = FILTER_SANITIZE_STRING;
$sanitizedData = filter_var($variable, $flag);
echo $sanitizedData . PHP_EOL;