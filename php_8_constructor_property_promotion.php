<?php

class Person
{
    // public $name;
    // public $age;

    public function __construct(public string $name = 'Jane Doe', public int $age = 25)
    {
        // $this->name = $name;
        // $this->age = $age;

        if ($name == 'Jane Doe') {
            echo 'Default name' . PHP_EOL;
        }
    }

    public function introduce()
    {
        echo "Hello, my name is {$this->name} and I'm {$this->age} years old." . PHP_EOL;
    }
}

$person = new Person('John Doe', 30);
$person->introduce();