<?php
declare(strict_types = 1);
require_once 'class-autoload.inc.php';
if(isset($_POST['submit'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $oper = $_POST['operator'];
    $calc = new Calc((int)$num1,(int)$num2,$oper);
    try {
        echo $calc->calculator();
    } catch (TypeError $e) {
        //throw $th;
    }
}
