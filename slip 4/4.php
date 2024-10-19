<?php
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$str3 = $_POST['str3'];
$ch = $_POST['ch'];
echo "<br>First string = $str1";
echo "<br>Second string = $str2";
echo "<br>String for replace = $str3";



if (strlen($str1) > strlen($str2)) {
  switch ($ch) {


    case 1:
      $pos = strpos($str1, $str2);
      if ($pos != 0) {
        echo "<br><br>String $str2 is not present at the start of the $str1 ";
      } else {
        echo "<br><br>String $str2 is  present at the start of the $str1 ";
      }
      break;

    case 2:
      $str4 = str_replace($str2, $str3, $str1);
      printf("<br>After replacing string is : ");
      echo $str4;
      break;

    case 3:
      $s = preg_split("//", $str1);
      foreach ($s as $value) {
        echo "<br>$value<br>";
      }
      break;
  }
} else {
  switch ($ch) {


    case 1:
      $pos = strpos($str2, $str1);
      if ($pos != 0) {
        echo "<br><br>String $str1 is not present at the start of the $str2 ";
      } else {
        echo "<br><br>String $str1 is  present at the start of the $str2 ";
      }
      break;

    case 2:
      $str4 = str_replace($str1, $str3, $str2);
      printf("<br>After replacing string is : ");
      echo $str4;
      break;

    case 3:
      echo "After spiliting the string is : <br>";
      $s = preg_split("//", $str2);
      foreach ($s as $value) {
        echo "<br>$value";
      }
      break;
  }
}
?>