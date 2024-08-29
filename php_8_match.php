<?php

$number = 5;
$result = match ($number) {
    1 => "one",
    2 => "two",
    3 => "three",
    4, 5, 6, 7, 8, 9, 10 => "number",
    default => "other"
};

echo $result;