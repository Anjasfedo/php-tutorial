<?php

class Calculator
{
    public function add(...$numbers)
    {
        // return array_sum($numbers);
        $result = 0;
        
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new Exception('Value is not a number');
            }
            
            $result += $number;
        }
        
        return $result;
    }
}