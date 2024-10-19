<?php
$arr = array('a' => '10', 'b' => '20', 'c' => '30', 'd' => '40');
$ch = $_POST['r1'];
switch ($ch) 
{
  case 1:
    echo "The array elements are : ";
    print_r($arr);
    break;

  case 2:
    echo "The size of array is : ";
    echo sizeof($arr);
    break;

  case 3:
    $len = sizeof($arr);
    $b = array_splice($arr, $len);
    echo "The deleted elements is :  ";
    print_r($arr);
    break;

  case 4:
    $a = array_flip($arr);
    echo "The reversed order of array (Flip array) is  : ";
    print_r($a);
    break;

  case 5:
    echo "Traverse in random order is : <br>";
    shuffle($arr);
    print_r($arr);
    break;

  default:
    echo "Invalid choices......";

}

?>