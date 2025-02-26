<?php

class Human
{
    private $name = "Human";

    // private static $name = "Human";

    public function getName()
    {
        echo "Hello my name is " . $this->name . PHP_EOL;
    }

    // public static function getName()
    // {
    //     echo "Hello my name is Human" . PHP_EOL;
    // }

    // public static function getName()
    // {
    //     echo "Hello my name is " . self::$name . PHP_EOL;
    // }
}

class StaticHuman
{

    private static $name = "Human";

    public static function getName()
    {
        echo "Hello my name is " . self::$name . PHP_EOL;
    }
}

$human = new Human();
$human->getName();

StaticHuman::getName();

// static properties

// static methods

// this vs self