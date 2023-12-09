<?php
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
