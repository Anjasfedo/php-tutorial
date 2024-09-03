<?php

/*
calculate age of person in days
get date and print the number of days since birthday
for ex there are 10136 days since someone birthday
*/

$birthday = '26 aug 2000';

$now = date('Y-m-d');

$birthday_datetime = strtotime($birthday);

$now_datetime = strtotime($now);

$diff = $now_datetime - $birthday_datetime;

$day_age = floor($diff / (60 * 60 * 24));

echo "there are $day_age since $birthday";