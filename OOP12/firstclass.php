<?php
//Scope Resolution Operator(::)
class firstclass {
    const EXAMPLE = 'you cant change this because this is a constant property';
    public static function nice(){
        echo self::EXAMPLE;
    }
}
