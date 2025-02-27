<?php

class Person
{
    public ?string $name = null;
    public ?int $age = null;

    public ?Home $home = null;

    public function __construct(?string $name, ?int $age)
    {
        $this->name = $name;
        $this->age = $age;

        echo "Name: {$this->name}, Age: {$this->age}" . PHP_EOL;
    }
}

class Home {
    public string $address = 'New York';
}

$person = new Person(null, 30);
// $person->home = new Home();
// echo $person->home->address . PHP_EOL;

// if ($person->home) {
    //     echo $person->home->address . PHP_EOL;
// }

echo $person->home?->address . PHP_EOL; // variable? is only for reading data