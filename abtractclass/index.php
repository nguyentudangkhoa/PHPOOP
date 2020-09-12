<?php
require_once "abstract/paymenttypes.adstract.php";
require_once "classes/buyproduct.php";
$payment = new BuyProduct();
echo $payment->getpayment();
?>