<?php 

abstract class Shape{
    abstract public function calculateArea();
}


class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

}

class Recta extends Shape {
    private $width;
    private $length;
    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

}

$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "\n";

$rectangle = new Recta(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
