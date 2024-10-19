<?php
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$pos = $_POST['pos'];
$ch = $_POST['ch'];
switch ($ch) {
  case 1:
    if ($str1 == $str2) {
      echo "<br>Both string are equal";
    } else {
      echo "<br>Both string are not equal";
    }
    break;

  case 2:
    if (strcmp($str1, $str2) !== 0) {
      echo "<br>Both string are not equal";
    } else {
      echo "<br>Both string are equal";
    }
    break;

  case 3:
    echo "<br>After Appending : ";
    echo "$str1" . "$str2";
    echo "<br><br>";
    break;


    //for string 1
  case 4:
    $len = strlen($str1) - $pos; 
    $s = substr($str1, $pos, $len);
    $str4 = strrev($s);
    echo "After Reverse : $str4<br>";
    break;

     //for string 2
  // case 4:
  //   $len = strlen($str2) - $pos; 
  //   $s = substr($str2, $pos, $len);
  //   $str4 = strrev($s);
  //   echo "After Reverse : $str4<br>";
  //   break;

}






?>