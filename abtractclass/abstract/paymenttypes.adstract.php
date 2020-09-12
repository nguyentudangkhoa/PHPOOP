<?php
abstract class Visa{
    public function visaPayment(){
        return "Perform a payment!!!!";
    }
    
    abstract function getpayment();
}
?>