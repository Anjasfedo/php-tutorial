<?php

$curl = curl_init();

$requestType = 'GET';
$url = 'https://www.imdb.com/chart/boxoffice/';

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => $requestType,
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($curl);

curl_close($curl);

// echo $response;

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($response);

$xpath = new DOMXPath($dom);
$weekendTitleNode = $xpath->query('//*[@id="boxoffice"]/h4');

$firstItem = $weekendTitleNode->item(0);
echo $firstItem->nodeValue . PHP_EOL;

$movieTitles = [];
for ($i = 0; $i < 10; $i++) {
    $movideTitleNode = $xpath->query('//*[@id=)"boxoffice"]/table/tbody/tr[' . ($i + 1) . ']/td[2]/a');
    $firstItem = $movideTitleNode->item(0);
    $movieTitles[] = $firstItem->nodeValue;
}

print_r($movieTitles);

$movieNodes = $xpath->query('//*[@class="titleColumn"]');
$movieTitles = [];

foreach ($movieNodes as $movieNode) {
    $movieTitles[] = trim($movieNode->nodeValue);
}

print_r($movieTitles);