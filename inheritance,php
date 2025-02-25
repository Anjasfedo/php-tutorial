<?php


// extends
class Car
{
    protected function drive()
    {
        echo 'car is driving' . PHP_EOL;
    }
}

class ElectricCar extends Car
{
    // public function drive() {
    //     echo 'car is driving' . PHP_EOL;
    // }

    protected function charge()
    {
        echo 'electric car is charging' . PHP_EOL;
    }
}

class Tesla extends ElectricCar
{
    public function autoDrive()
    {
        $this->charge();
        echo 'Tesla is driving' . PHP_EOL;
    }
}

$tesla = new Tesla();
$tesla->autoDrive();

// access modifiers
// private, only itself
// protected, itself and children
// public, all