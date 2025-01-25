<?php

$text = "lorem ipsum dolor sit amet consectetur adipisicing elit";
$word = "sit";

$isContain = str_contains($text, $word);
var_dump($isContain);

$isStartWith = str_starts_with($text, $word);
var_dump($isStartWith);

$isEndWith = str_ends_with($text, "elit");
var_dump($isEndWith);