<?php

abstract class Vehicle {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function move();
}


class Car extends Vehicle {
    public function move() {
        return "The car is driving";
    }
}

class Bicycle extends Vehicle {
    public function move() {
        return "The bicycle is pedaling";
    }
}

$car = new Car("red");
echo $car->move(); 

$bicycle = new Bicycle("blue");
echo $bicycle->move(); 
?>
