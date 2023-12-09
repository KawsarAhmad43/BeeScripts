<?php

// Define a trait
trait Greetings {
    public function sayHello() {
        echo "Hello, ";
    }

    public function sayGoodbye() {
        echo "Goodbye!";
    }
}

// Create a class that uses the trait
class MyClass {
    // Include the Greetings trait
    use Greetings;

    // Additional class-specific methods or properties
    public function getName() {
        return "User";
    }
}

// Create an instance of the class
$obj = new MyClass();

// Use the methods from both the class and the trait
$obj->sayHello();
echo $obj->getName();
$obj->sayGoodbye();

?>
