<?php

// definition
class NameOfTheClass
{

}

// properties
class Human
{
    private $name;
    protected $age;
    public $yearBorn;
}

// access modifier
class Human2
{
    private $name; // only class can access
    protected $age; // only class and inherited can access
    public $yearBorn; // anyone can access
}

// constructor
class Human3
{
    private string $name;
    public int $age;
    private int $yearBorn;

    public function __construct(string $name, int $yearBorn)
    {
        $this->name = $name;
        $this->yearBorn = $yearBorn;
        $this->age = date('Y') - $yearBorn;
    }
}

// method   
class Human4
{
    private string $name;
    public int $age;
    private int $yearBorn;

    public function __construct(string $name, int $yearBorn)
    {
        $this->name = $name;
        $this->yearBorn = $yearBorn;
        $this->age = $this->calculateAge();
    }

    // method
    private function calculateAge()
    {
        return date('Y') - $this->yearBorn;
    }
}

// this keyword, calling the current object

// ->
// $array['key']
// $object->key

// object vs class, object is an instance of a class