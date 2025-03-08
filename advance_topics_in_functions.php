<?php

// splat operators
function splat(...$args)
{
    var_dump($args);
}

splat(1, 2, 3);

function sayHello($name, $age)
{
    echo "Hello $name, you are $age years old";
}

$person = [
    'John Doe',
    20
];

sayHello(...$person);

function myFriends(...$friends)
{
    foreach ($friends as $friend) {
        echo $friend . PHP_EOL;
    }
}

myFriends('John Doe', 'Jane Doe', 'Jack Doe');

// pointer of argument

function ChangeMyNumber(int &$number)
{
    $number = $number + 10;
    return $number;
}

$a = 10;
$b = ChangeMyNumber($a);
echo $a . PHP_EOL;
echo $b . PHP_EOL;

// 

$array = [5, 3, 2, 1, 4];
sort($array);
echo implode(',', $array) . PHP_EOL;

// callback
function change($a, $callback)
{
    return $callback($a);
}

echo change(10, fn($a) => $a * 2) . PHP_EOL;

print_r(array_map(fn($value) => $value * 2, $array));