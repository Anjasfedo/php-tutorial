<?php

// structure
function lorem()
{
    echo 'lorem ipsum' . PHP_EOL;
    return 'lorem';
}

$lorem = lorem();
echo $lorem . PHP_EOL;

// arguments
function arguments($arg1, $arg2)
{
    echo $arg1 . PHP_EOL;
    echo $arg2 . PHP_EOL;
}

arguments('lorem', 'ipsum');

// argument data type
function add(int $a, int $b)
{
    echo $a + $b . PHP_EOL;
}

add(10, 20);
// add('lorem', 'ipsum');

// argument default value
function defaults($arg1 = 'lorem', $arg2 = 'ipsum')
{
    echo $arg1 . PHP_EOL;
    echo $arg2 . PHP_EOL;
}

defaults();
defaults('lorem2', 'ipsum2');

// return
function returnFunction() : string
{
    return 'lorem ipsum';
}

echo returnFunction() . PHP_EOL;