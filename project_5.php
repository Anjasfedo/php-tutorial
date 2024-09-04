<?php

/*
distance calculator
- calculate difference of longitude of second place and the first place
- convert this value to radians
- calculate its cosine
- convert latitude of both places to radians
- calculate sine and cosine of both converted latitudes
- sine of converted latitude multiplied plus cosines multiplied
*/

//

$placeA = [
    'latitude' => 10,
    'longitude' => 10
];

$placeB = [
    'latitude' => 20,
    'longitude' => 20
];

function calculateDistance(array $placeA, array $placeB, $humanReadable = true)
{
    $longitudeDiff = $placeA['longitude'] - $placeB['longitude'];

    $longitudeDiffInRad = deg2rad($longitudeDiff);

    $longitudeDiffInRadCosine = cos($longitudeDiffInRad);

    $longitudeAInRad = deg2rad($placeA['latitude']);
    $longitudeBInRad = deg2rad($placeB['latitude']);

    $latitudeAInRadSine = sin($longitudeAInRad);
    $latitudeAInRadCosine = cos($longitudeAInRad);

    $latitudeBInRadSine = sin($longitudeBInRad);
    $latitudeBInRadCosine = cos($longitudeBInRad);

    $dist = $latitudeAInRadSine * $latitudeBInRadSine + $longitudeDiffInRadCosine * $latitudeAInRadCosine * $latitudeBInRadCosine;

    if (!$humanReadable) {
        return $dist;
    }

    $arcCosDistance = acos($dist);

    $radiusInKm = 6364.963;

    $distInKm = $radiusInKm * $arcCosDistance;

    return $distInKm;
}

$distance = calculateDistance($placeA, $placeB, false);

echo $distance . PHP_EOL;

$distanceKm = calculateDistance($placeA, $placeB);

echo $distanceKm . 'km' . PHP_EOL;