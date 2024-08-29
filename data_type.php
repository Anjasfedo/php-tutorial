<?php

/*
main datatype:
- string
- integer
- double of float
- boolean
- array
- object
- null
- resource
*/

// string
$name = 'alose';
$name = "alole";

// stiring single quote vs double quote
$x = 10;
// $example = 'x is $x'; // will not be templating
$example = "x is $x"; // will be templating (same as `${}` on js or f'' on python)
echo $example;

// integer
$x = 100;

// double or float
$x = 10.5;

// boolean
$true = true;
$false = false;

// boolean case (case doest metter on true or false)
$true = True;
$true = TRUE;
$true = TrUe;

$false = False;
$false = FALSE;
$false = FaLsE;

// array
$x = 10;
$y = 20;
$z = 30;

$array = [$x, $y, $z, 'lorem', true];

// object
$date = new DateTime();

// null
$null = null;

// null case (same as true or false, it does not matter the case)
$null = Null;
$null = NULL;

// resource