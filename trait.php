<?php

// definition

trait Talking {
    public function greeting() {
        return 'Hello' . PHP_EOL;
    }
}

trait Eating {
    public function eat() {
        return 'nom nom nom' . PHP_EOL;
    }
}

class Human {
    use Talking, Eating;
}

// implementation
$human = new Human();
echo $human->greeting();
echo $human->eat();