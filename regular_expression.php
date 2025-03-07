<?php

// check
// "/pattern/"

$string = "hello world, hello world";
$pattern = "/hello/";

if (preg_match($pattern, $string, $matches)) {
    print_r($matches);
} else {
    echo "not found";
}

// replace
$replacement = "hi";
$limit = 1;
$new_string = preg_replace($pattern, $replacement, $string, $limit);
echo $new_string . PHP_EOL;