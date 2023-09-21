<?php
  
  function Fibonacci($number){
    if($number == 0){
        return 0;
    }else if($number == 1){
        return 1;
    }else{
        return Fibonacci($number-1)+Fibonacci($number-2);
    }
  }
  $number = 10;
  echo "Fibonacci series is :- <br/>";
  for($i=0; $i < $number; $i++){
    
    echo Fibonacci($i).", ";
  }

?>