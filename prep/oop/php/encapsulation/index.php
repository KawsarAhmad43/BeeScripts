<?php
class Student{

    private $name;
    private $id;
    private $roll;
    private $class;
    private $balance;

    public function setInfo($id,$name,$roll,$class,$balance){
        $this->name=$name;
        $this->id=$id;
        $this->roll=$roll;
        $this->class=$class;
        $this->balance=$balance;
    }

    public function getInfo(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'roll' => $this->roll,
            'class' => $this->class,
            'balance' => $this->balance,
        ];
    }

    public function displayInfo(){
        echo "student name: ".$this->name." <br>";
        echo "student id: ".$this->id." <br>";
        echo "student roll: ".$this->roll." <br>";
        echo "student class: ".$this->class." <br>";
        echo "student balance: ".$this->balance." <br>";
    }
    
}

$student = new Student();
$student->setInfo(1, 'John Doe', 'A123', '10th', 100);
$student->getInfo();
$student->displayInfo();

