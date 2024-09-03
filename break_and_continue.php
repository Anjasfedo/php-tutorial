<?php

// break
$names = ['john', 'jane', 'jack', 'alex', 'simon'];
foreach ($names as $name) {
    echo $name . PHP_EOL;
    
    if ($name == 'jack') {
        $found = true;
        break;
    }  
}

echo $found . PHP_EOL;

// continue
$numbers = [3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        continue;
    }
    
    echo $number . PHP_EOL;
}