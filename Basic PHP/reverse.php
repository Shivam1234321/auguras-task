<?php

  function reverse($string){
    $len = strlen($string);

    $newstring = '';
    for($i=($len-1); $i>=0; $i--){
      $newstring.=$string[$i];
    }

    return $newstring;
  }
  
  echo reverse("shivam sahu");

  


?>