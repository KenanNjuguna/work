<?php

interface Movable {
    public function move();
}


class Car implements Movable {
    public function move() {
        return "The car is driving";
    }
}

class Bicycle implements Movable {
    public function move() {
        return "The bicycle is pedaling";
    }
}


function makeItMove(Movable $movable) {
    echo $movable->move();
}

$car = new Car();
$bicycle = new Bicycle();

makeItMove($car);      
makeItMove($bicycle);  
?>
