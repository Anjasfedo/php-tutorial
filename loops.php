<?php

/*
types of loop
- for
- while
- do while
- foreach
*/

// for
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// while
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

// do while
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

// foreach
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($array as $key => $value) {
    echo "key: $key, value $value";
}

for ($i = 0; $i < sizeof($array); $i++) {
    echo $array[$i];
}

foreach ($array as $value) {
    echo $value;
}