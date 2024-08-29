<?php

/*
we have a list of people information with name and age
1. want to count number of adults +18 yo and children
2. list people between 22 to 30 that can apply for the job
*/

$people = [
  ['name' => 'Joseph', 'age' => 25],
  ['name' => 'Michael', 'age' => 23],
  ['name' => 'Jasmine', 'age' => 22],
  ['name' => 'Cynthia', 'age' => 18],
  ['name' => 'Daisy', 'age' => 20],
  ['name' => 'Hannah', 'age' => 18],
  ['name' => 'Alex', 'age' => 30],
  ['name' => 'Natalie', 'age' => 22],
  ['name' => 'Sarah', 'age' => 23],
  ['name' => 'Liam', 'age' => 31],
  ['name' => 'Olivia', 'age' => 10],
  ['name' => 'Noah', 'age' => 8],
];

// 

$adultCount = 0;
$childrenCount = 0;
$canApply = [];

foreach ($people as $person) {
  if ($person['age'] >= 18) {
    $adultCount++;
    if ($person['age'] >= 22 && $person['age'] <= 30) {
      $canApply[] = $person;
    }
  } else {
    $childrenCount++;
  }
}

print_r($adultCount);
print_r($childrenCount);
print_r($canApply);