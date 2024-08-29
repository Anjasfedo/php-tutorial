<?php 

/*
type of conditional
- if elseif else
- switch
- ternary
*/

// if elseif else
$condition = 1;
if ($condition == 1) {
    echo "true 1";
} elseif ($condition == 2) {
    echo "true 2";
} else {
    echo "false";
}

// switch
switch ($condition) {
    case 1:
        echo "true 1";
        break;
    case 2:
        echo "true 2";
        break;
    default:
        echo "false";
}

// ternary
echo $condition == 1 ? "true 1" : "false";

// danger of nested conditional
$condition = 1;
if ($condition == 1) {
    if ($condition == 2) {
        echo "true 2";
    } else {
        echo "false";
    }
} else {
    echo "false";
}