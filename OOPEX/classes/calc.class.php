<?php
class Calc{
    protected $operator;
    protected $num1;
    protected $num2;
    public function __construct(int $num1, int $num2, string $operator)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function calculator(){
        switch ($this->operator) {
            case '+':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case '/':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
                            
            default:
                $result = "ERROR!!!!";
                return $result;
                break;
        }
    }
}
