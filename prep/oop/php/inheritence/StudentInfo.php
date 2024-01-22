<?php
class Info{
    protected $name;
    protected $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getInfo(){
        echo "Name: {$this->name}, Age: {$this->age}\n";
    }
    
}

class Student extends Info{
    private $grade;
    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age);
        $this->grade = $grade;
    }
    
        public function displayStudentInfo() {
        $this->getInfo();
        echo "Grade: {$this->grade}\n";
    }
}


$s1 = new Student("Kochi Ali", 18, "A+");

$s1->getInfo();
$s1->displayStudentInfo();

?>
