<?php
class Person{
    private $name;
    private $age;

    public function __construct(string $name, $age)
    {
        $this->name = $name;
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
