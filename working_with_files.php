<?php

// process
/*
open a file
read & write
close the file
*/

// open the file
$file = fopen(filename: 'example.txt', mode: 'r+');

// flags
// r for reading
// w for writing
// a for appending
// x for exclusive creation

// read the file
// $first_line = fgets($file);
// $second_line = fgets($file);

// echo $first_line . PHP_EOL;
// echo $second_line . PHP_EOL;

$lines = fgets($file);
// while ($lines != false) {
while (!feof($file)) {
    $line = fgets($file);
    echo $line . PHP_EOL;
}

// write the file
fwrite($file, "\nthis is new line\n");
fwrite($file, 'this is new line too' . PHP_EOL);

// close the file
fclose($file);

// append
$file = fopen(filename: 'example.txt', mode: 'a');
fwrite($file, "\nthis is new line\n");
fwrite($file, 'this is new line too' . PHP_EOL);
fclose($file);