<?php

class Builder{
    
    private $select;
    private $limit;
    
      private $table;
      
    public function table($table){
        $this->table = "FROM ".$table;
        return $this;
    }
    
    public function select($name){
        $this->select = "SELECT ".$name;
        return $this;
    }
    
    public function limit($age){
        $this->limit = "LIMIT ".$age;
        return $this;
    }
    
    public function get(){
        return "$this->select $this->table $this->limit";
    }
}

echo (new Builder())->table("Student")->limit(10)->select("*")->get();


?>
