<?php
 namespace className; //if the class inside the folder namespace is the nane of folder
class className{
   
    private $name;
    private $number;

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }
    //get set properties
    public function setName(string $name){
        $this->name = $name;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getNumber()
    {
        return $this->number;
    }
}
