<?php

// array as datatype
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// two ways to declare an array
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$b = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// printing an array
// echo $array; // cause error
print_r($array);
var_dump($array);

// array deconstruction
// array itslef is an object, with item (key, value)
$a = [1, 'lorem', 2, 3, [1, 2, 3]];
print_r($a);

// array type
// indexed
$a = [
    0 => 1,
    20 => 2,
    50 => 3,
];

// associative
$a = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

// combined
$a = [
    1 => 1,
    'b' => 2,
    'c' => 3,
];

// get a value from array
// array[key]

echo $a['b'];

// add new valye to array
// array[key] = value
// array[] = value // automaticaly increment the key

$a[] = 20;
// $a[2] = 10;

print_r($a);

// update value of array (key is unique)
// array[key] = value

$a['b'] = 10;
print_r($a);