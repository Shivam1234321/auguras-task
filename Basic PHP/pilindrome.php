<?php
  
  function Palindrome($string){
    $len = strlen($string);

    $newstring = '';
    for($i=($len-1); $i>=0; $i--){
      $newstring.=$string[$i];
    }

    if($string == $newstring){
        return "Given String is pilindrome";
    }
    return "Given String is not pilindrome";
  }

  echo Palindrome("radar");
  echo "<br/>";
  echo Palindrome("radar");

?>