<?php 

require_once '02.php';

class Calculator {

    public $num1;
    public $num2;
    public $cal;
    
   public function __construct($num1,$num2,$cal)
    {
        $this->num1=$num1;
        $this->num2=$num2;
        $this->cal=$cal;

    }

    public function getResult()
    {switch ($this->cal) {
        case 'add':
           $result= $this->num1 + $this->num2;
            break;
        case 'min':
            $result= $this->num1 - $this->num2;
            break;
        case 'mul':
            $result= $this->num1 * $this->num2;
            break;    
        default:
            $result = "Error, please add numbers";
            break;
    }
            return $result;
    }
}






?>