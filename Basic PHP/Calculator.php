<?php
  
  class Calculator{

    public function sum($a=0, $b=0){
        return $a+$b;
    }

    public function sub($a=0, $b=0){
        return $a-$b;
    }

    

    public function multiply($a=0, $b=0){
        return $a*$b;
    }

    public function division($a=0, $b=0){
        if($b ==0){
            return "division by zero exception.";
        }
        return $a/$b;
        
    }

  }

  $obj = new Calculator;

  echo "Sum of given two number =".$obj->sum(3,7);
  echo "<br/>";

  echo "Sub of given two number =".$obj->sub(3,7)."\n";

  echo "<br/>";

  echo "Multiply of given two number =".$obj->multiply(3,7)."\n";
  echo "<br/>";

  echo "Division of given two number =".$obj->division(0,7)."\n";
  

?>