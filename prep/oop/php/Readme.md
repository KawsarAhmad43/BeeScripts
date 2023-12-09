# Object-Oriented Programming in PHP - A Bird's Eye View

This repository provides examples of basic Object-Oriented Programming (OOP) concepts in PHP.

## Table of Contents

- [Basic Example of OOP Class and Object](#basic-example-of-oop-class-and-object)
- [Method Overriding](#method-overriding)
- [Constructor](#constructor)
- [Encapsulation](#encapsulation)
- [Polymorphism](#polymorphism)
- [Abstraction](#abstraction)
- [Inheritance](#inheritance)
- [Interface for Multiple Inheritance](#interface-for-multiple-inheritance)
- [Trait](#trait)

## Basic Example of OOP Class and Object
-a class is a blueprint for creating objects, and an object is an instance of a class. This concept allows you to structure your software using objects that encapsulate data and behavior.
#### Basic example of OOP, class, object
```php
class Fruit {
    // Properties
    public $name;
    public $taste;
    public $shape;

    // Methods
    public function setFruitName($sname, $staste, $sshape) {
        $this->name = $sname;
        $this->taste = $staste;
        $this->shape = $sshape;
    }

    public function getFruitName() {
        echo "This fruit's name is: " . $this->name . " and it tastes like " . $this->taste . " and its shape is " . $this->shape;
    }
}

$f1 = new Fruit();
$f1->setFruitName("Apple", "sweet", "Ovaly");
$f1->getFruitName();
```

## Method Overriding
- method overriding occurs when a subclass provides its own implementation for a method that is already defined in its superclass
#### Method Overriding Example

```php
class ParentClass {
    public function showMessage() {
        echo "Message from ParentClass.<br>";
    }
}

class ChildClass extends ParentClass {
    public function showMessage() {
        echo "Message from ChildClass.<br>";
    }
}

// Create an instance of ChildClass
$obj = new ChildClass();

// Call the overridden method
$obj->showMessage();
```
## Constructor
- A constructor is a special method in a class that is automatically called when an object is created. 
#### Constructor Example

```php
class A {
    public function __construct() {
        echo "Constructor of class A is called.<br>";
    }
}

class B extends A {
    public function __construct() {
        parent::__construct(); // Call the constructor of the parent class
        echo "Constructor of class B is called.<br>";
    }
}

// Create an instance of class B
$objB = new B();
```
## Encapsulation
- Encapsulation in OOP involves bundling data and methods into a single unit, a class, to restrict external access and prevent unintended data modification.
#### Encapsulation Example

```php
class Student {
    private $name;
    private $id;
    private $roll;
    private $class;
    private $balance;

    public function setInfo($id, $name, $roll, $class, $balance) {
        $this->name = $name;
        $this->id = $id;
        $this->roll = $roll;
        $this->class = $class;
        $this->balance = $balance;
    }

    public function getInfo() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'roll' => $this->roll,
            'class' => $this->class,
            'balance' => $this->balance,
        ];
    }

    public function displayInfo() {
        echo "student name: " . $this->name . " <br>";
        echo "student id: " . $this->id . " <br>";
        echo "student roll: " . $this->roll . " <br>";
        echo "student class: " . $this->class . " <br>";
        echo "student balance: " . $this->balance . " <br>";
    }
}

$student = new Student();
$student->setInfo(1, 'John Doe', 'A123', '10th', 100);
$student->getInfo();
$student->displayInfo();
```
## Polymorphism
- if a single objects behaviour like multiple form is called polymorphism
#### Polymorphism Example

```php
class Vehicle {
    protected $brand;
    protected $model;

    public function setData($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getData() {
        return "This is from Parent: Brand {$this->brand}, Model: {$this->model}";
    }

    public function start() {
        return "This is from Parent: The vehicle is starting.";
    }
}

class Car extends Vehicle {
    private $color;

    public function setColor($color) {
        $this->color = $color;
    }

    // Override the getInfo method of the parent class
    public function getData() {
        return "This is from Child: Brand: {$this->brand}, Model: {$this->model}, Color: {$this->color} ";
    }

    public function honk() {
        return "This is from child: Beep beep!";
    }
}

$car = new Car();
$car->setData("Toyota", "Axios");
$car->setColor("red");

echo $car->getData();
echo $car->start();
```
## Abstraction
- Abstraction in Object-Oriented Programming hides the implementation details while exposing the functionality
#### Abstraction Example

```php
abstract class Shape {
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

class Rectangle extends Shape {
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

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
```
## Inheritance
- Inheritance enables a class to inherit properties and behaviors from another class
#### Inheritance Example

```php
class Vehicle {
    protected $brand;
    protected $model;

    public function setData($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getData() {
        return "This is from Parent: Brand {$this->brand}, Model: {$this->model}";
    }

    public function start() {
        return "This is from Parent: The vehicle is starting.";
    }
}

class Car extends Vehicle {
    private $color;

    public function setColor($color) {
        $this->color = $color;
    }

    // Override the getInfo method of the parent class
    public function getData() {
        return "This is from Child: Brand: {$this->brand}, Model: {$this->model}, Color: {$this->color} ";
    }

    public function honk() {
        return "This is from child: Beep beep!";
    }
}

$car = new Car();
$car->setData("Toyota", "Axios");
$car->setColor("red");

echo $car->getData();
echo $car->start();
```
## Interface for Multiple Inheritance
- php doesnt support multiple inheritance so interface is used to obtain multiple inheritance functionality.
#### Interface Example

```php
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
```
## Trait
- trait is a way of using another class's functionality without inheriting that class
#### Trait Example

```php
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
```
