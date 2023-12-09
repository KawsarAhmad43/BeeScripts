<?php


class Vehicle{

    protected $brand;
    protected $model;

    public function setData($brand,$model){
        $this->brand=$brand;
        $this->model=$model;
    }

    public function getData(){
        return "This is from Parent: Brand {$this->brand}, Model: {$this->model}";
    }

    public function start() {
        return "This is from Parent: The vehicle is starting.";
    }


}

class Car extends Vehicle{
private $color;
    public function setColor($color) {
        $this->color = $color;
    }
    // Override the getInfo method of the parent class
    public function getData() {
        return "This is from Child: Brand: {$this->brand}, Model: {$this->model}, Color: {$this->color} ";
    }
    public function honk() {
        return "this is from child :Beep beep!";
    }

}


$car= new Car();
$car->setData("Toyota", "Axios");
$car->setColor("red");

echo $car->getData();
echo $car->start();