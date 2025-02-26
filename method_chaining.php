<?php

class Human
{
    private $name;

    private $age;

    public function setName($name)
    {
        $this->name = ucfirst($name);

        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function introduce()
    {
        echo "Hello, my name is {$this->name} and I'm {$this->age} years old." . PHP_EOL;
    }
}

$human = new Human();

$human->setName('john')
    ->setAge(20)
    ->introduce();