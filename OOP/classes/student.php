<?php
class Student{
    private $name;
    private $age;
    public function setName(string $name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
}
