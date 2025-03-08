<?php

// composer

// packages

// versions

// autoload
require __DIR__.'/vendor/autoload.php';

$factory = new RandomLib\Factory;

$random = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));

echo $random->generateString(32);