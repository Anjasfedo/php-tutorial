<?php

// most useful functions
// strtotime
echo strtotime(datetime: '26 aug 2022') . PHP_EOL;
echo strtotime(datetime: 'sadasdasd') . PHP_EOL;

// timestamp
echo strtotime(datetime: 'yesterday') . PHP_EOL;
echo strtotime(datetime: 'today') . PHP_EOL;

// date
echo date(format: 'Y-m-d') . PHP_EOL;
echo date(format: 'Y-m-d', timestamp: strtotime(datetime: '26 aug 2022')) . PHP_EOL;
echo date(format: 'Y-m-d', timestamp: strtotime(datetime: '+2 days')) . PHP_EOL;
echo date(format: 'Y-m-d', timestamp: strtotime(datetime: '7 days ago')) . PHP_EOL;

// date format
echo date(format: 'd', timestamp: strtotime(datetime: '2 aug 2022')) . PHP_EOL;
echo date(format: 'j', timestamp: strtotime(datetime: '2 aug 2022')) . PHP_EOL;
echo date(format: 'D', timestamp: strtotime(datetime: '2 aug 2022')) . PHP_EOL;
echo date(format: 'l', timestamp: strtotime(datetime: '2 aug 2022')) . PHP_EOL;
echo date(format: 'H:i:s T', timestamp: strtotime(datetime: '2 aug 2022')) . PHP_EOL;