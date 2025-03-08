<?php

$user = 'test@example.com';
$password = 'password';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo $hashedPassword . PHP_EOL;

$isValid = password_verify($password, $hashedPassword);

echo $isValid . PHP_EOL;