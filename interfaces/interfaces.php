<?php
//interface 1
interface OOP{
    public function payNow();//a interface have a function which havent
                            // define yet
}
//interface 2
interface OOP2{
    public function LoginFirst();//a interface have a function which havent
                                // define yet
}
class Main implements OOP,OOP2{// A class can implement many interface
    public function payNow(){}
    public function LoginFirst(){}
}
