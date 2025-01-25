<?php

$text = "lorem ipsum dolor sit amet consectetur adipisicing elit";
echo $text . PHP_EOL;

// string to array
$array = explode(' ', $text);
print_r($array);

// array to string
$returnText = implode(' ', $array);
echo $returnText . PHP_EOL;

// string to uppercase
$uppercaseText = strtoupper($text);
echo $uppercaseText . PHP_EOL;

// string to lowercase
$lowercaseText = strtolower($uppercaseText);
echo $lowercaseText . PHP_EOL;

// uppercase first letter
$ucfirstText = ucfirst($lowercaseText);
echo $ucfirstText . PHP_EOL;

// upeprcase first letter of each word
$ucwordsText = ucwords($lowercaseText);
echo $ucwordsText . PHP_EOL;

// clean up extra spaces
$textWithSpace = "   lorem ipsum dolor sit amet consectetur adipisicing elit   ";
echo $textWithSpace . PHP_EOL;

$cleanText = trim($textWithSpace);
echo $cleanText . PHP_EOL;

// new lines to html breaks
// \n = <br>
$trimmedText = $cleanText . "\n alole";
echo $trimmedText . PHP_EOL;

$newlineToBr = nl2br($trimmedText);
echo $newlineToBr . PHP_EOL;

// remove html tags
$cleanText = strip_tags($newlineToBr);
echo $cleanText . PHP_EOL;