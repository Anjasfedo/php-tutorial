<?php

// 
$command = escapeshellcmd('python sayHello.py alole');

exec($command, $output, $resultCode);
var_dump($output);
var_dump($resultCode);