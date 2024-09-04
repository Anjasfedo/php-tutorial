<?php

// xml: extensible markup language

// json: javascript object notation

// read json
$json = '{
    "accounts": {
        "1": "lorem",
        "2": "ipsum",
        "3": "dolor",
        "4": "res"
    }
}';

$array = json_decode($json, associative: true);

print_r($array);

// write json

$json = json_encode($array, JSON_PRETTY_PRINT);

echo $json . PHP_EOL;

// read xml
$xml = '
<?xml version="1.0" encoding="UTF-8" ?>
<accounts>
    <account type="1">lorem</account>
    <account type="2">ipsum</account>
    <account type="3">dolor</account>
    <account type="4">res</account>
</accounts>
';

$xml = trim($xml);

$dom = new DOMDocument();
$dom->loadXML($xml);

$accounts = $dom->getElementsByTagName('account');

foreach ($accounts as $account) {
$type = $account->getAttribute('type'); // Corrected to get 'type' attribute
$name = $account->nodeValue; // Get the node value (account name)
echo "Type $type: $name" . PHP_EOL;
}

//

$accounts = new SimpleXMLElement($xml);
foreach ($accounts->account as $account) {
$name = $account['type'];
$link = $account;
echo "Type $name: $link" . PHP_EOL;
}

// write xml

$xml = $dom->saveXML();
echo $xml . PHP_EOL;

$xmlString = '
<?xml version="1.0" encoding="UTF-8"?>
<accounts>
    <account type="1">lorem</account>
    <account type="2">ipsum</account>
    <account type="3">dolor</account>
    <account type="4">res</account>
</accounts>';

$xmlString = trim($xmlString);

$accounts = new SimpleXMLElement(data: $xmlString);

$accounts->addChild('account', 'lorem')->addAttribute('type', '5');

$finalXml = $accounts->asXML();

echo $finalXml . PHP_EOL;