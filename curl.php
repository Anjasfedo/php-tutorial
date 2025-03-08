<?php

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://example.com',
    // CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HEADER => [],
    CURLOPT_CUSTOMREQUEST => 'GET',
    // CURLOPT_CUSTOMREQUEST => 'POST',
    // CURLOPT_POSTFIELDS => json_encode([
    //     'title' => 'foo',
    //     'body' => 'bar',
    //     'userId' => 1
    // ])
]);

$response = curl_exec($curl);

curl_close($curl);

echo $response;