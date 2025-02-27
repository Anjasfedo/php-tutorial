<?php

// definition
abstract class Human {
    private $name = 'John';
    public function getName()
    {
        return $this->name;
    }

    abstract protected function nationality();
}

class Loremu extends Human {
    public function getName()
    {
        return 'Lorem';
    }

    public function nationality()
    {
        return 'America';
    }
}

$lorem = new Loremu();
echo $lorem->getName() . PHP_EOL;
echo $lorem->nationality() . PHP_EOL;