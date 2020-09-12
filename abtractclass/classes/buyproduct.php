<?php
class BuyProduct extends Visa{
    public function getpayment()
    {
        return $this->visaPayment();
    }
}
?>