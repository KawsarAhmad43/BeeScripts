<?php

// Here A is Parent class
class A {
    public function __construct() {
        echo "Constructor of class A is called.<br>";
    }
}

// Child class B inheriting from Parent class A
class B extends A {
    public function __construct() {
        parent::__construct(); // Call the constructor of the parent class
        echo "Constructor of class B is called.<br>";
    }
}

// Create an instance of class B
$objB = new B();

?>
