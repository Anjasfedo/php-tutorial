<?php

require_once './Calculator.php';

it('can add two numbers', function () {
    $calculator = new Calculator();

    expect($calculator->add(1, 2))->toBe(3);
});

it('can add multiple numbers', function () {
    $calculator = new Calculator();

    expect($calculator->add(1, 2, 3))->toBe(6);
});

it("throws an exception when value is not a number", function () {
    $calculator = new Calculator();

    expect(fn () => $calculator->add('a', 'b'))->toThrow('Value is not a number');
});