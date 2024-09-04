<?php

/*
have json string of countries with the phone numbers

reaad it and find the phone code based on country
then write it to csv file
*/
$data = '{
    "uk": "44",
    "usa": "1",
    "germany": "49",
    "france": "33",
    "italy": "39",
    "spain": "34",
    "japan": "81",
    "china": "86",
    "korea": "82",
    "thailand": "66",
    "india": "91",
    "brazil": "55",
    "russia": "7",
    "australia": "61",
    "canada": "1",
    "mexico": "52",
    "chile": "56",
    "colombia": "57",
    "peru": "51",
    "vietnam": "84",
    "poland": "48"
}
';

$json = json_decode($data, associative: true);

$file = fopen('project_3.csv', 'w');

fputcsv($file, ['country', 'code']);

foreach ($json as $key => $value) {
    fputcsv($file, [$key, $value]);
}

fclose($file);