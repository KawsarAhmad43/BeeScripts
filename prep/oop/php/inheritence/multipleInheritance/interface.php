<?php

// Interface 1
interface A {
    public function methodA();
}

// Interface 2
interface B {
    public function methodB();
}

// Class implementing both interfaces
class MyClass implements A, B {
    public function methodA() {
        echo "Method A implementation.<br>";
    }

    public function methodB() {
        echo "Method B implementation.<br>";
    }
}

// Create an instance of the class
$obj = new MyClass();

// Call methods from both interfaces
$obj->methodA();
$obj->methodB();

?>
