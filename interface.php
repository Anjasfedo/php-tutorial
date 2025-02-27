<?php

// definition
interface HumanInterface
{
    public function getName();

    public function getAge(int $yearBorn);
}

interface ProgrammerInterface
{
    private function coding();
}

// interface vs class
class Loremu implements HumanInterface, ProgrammerInterface
{
    public function getName()
    {
        return 'Lorem';
    }

    public function getAge(int $yearBorn)
    {
        return date('Y') - $yearBorn;
    }

    public function fly()
    {
        return 'I can fly';
    }

    public function coding()
    {
        return 'I can coding';
    }
}

// implementation
$lorem = new Loremu();
echo $lorem->getName() . PHP_EOL;
echo $lorem->getAge(2000) . PHP_EOL;    
echo $lorem->fly() . PHP_EOL;    
echo $lorem->coding() . PHP_EOL;