<?php


class Fruit {
    public $name;
    public $taste;
    public $shape;


    public function setFruitName($sname, $staste, $sshape){
       $this->name= $sname;
       $this->taste= $staste;
       $this->shape=$sshape;
    }
    public function getFruitName(){
       echo " this fruit's name is : ". $this->name . " and it tstate like " . $this->taste . " and its shape is " . $this->shape;
    }

}

$f1 = new Fruit();
$f1->setFruitName("Apple", "sweet", "Ovaly");
$f1->getFruitName();