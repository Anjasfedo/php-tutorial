<?php

// csv: columns separated by commas (1, 2, 3)

// open
$file = fopen('example.csv', 'r');

$line = fgetcsv($file);

// read csv
while ($line != false) {
    $id = $line[0];
    $name = $line[1];

    echo "id: $id, name: $name" . PHP_EOL;

    $line = fgetcsv($file);
}

fclose($file);

// write csv
$file = fopen('example.csv', 'a');

fputcsv($file, ['5', 'lorem']);

fclose($file);