<?php

$ch = $_POST['r1'];
function odd($var)
{
  if (($var % 2) != 0)
    return $var;
}

$a = array('deep' => 90.90, 'sameer' => 90.87, 'gaurav' => 89);
$a1 = array('deep' => 10, 'b' => 20, 'c' => 40);
$a2 = array('a' => 5, 'b' => 90, 'c' => 30);

switch ($ch) {

  case 1:
    echo "<br>The original array is : <br>";
    print_r($a);
    sort($a);
    echo "<br><br>The sorted array in ascending order is : <br>";
    print_r($a);
    rsort($a);
    echo "<br><br>The sorted array in descending order is : <br>";
    print_r($a);
    break;

  case 2:
    echo "<br>The original array is : <br>";
    print_r($a);
    asort($a);
    echo "<br><br>The sorted array in ascending order is : <br>";
    print_r($a);
    arsort($a);
    echo "<br><br>The sorted array in descending order is : <br>";
    print_r($a);
    break;
  case 3:
    echo "<br><br>Filter odd elements from an array is : <br>";
    print_r(array_filter($a, 'odd'));
    break;

  case 4:
    array_multisort($a, 0, $a1, 1, $a2, 0);
    print_r($a);
    echo "<br>";
    print_r($a1);
    echo "<br>";
    print_r($a2);
    echo "<br>";
    break;

  case 5:
    echo "<br><br>The merge of two arrays is : <br>";
    print_r(array_merge($a, $a1));
    break;

  case 6:
    echo "<br><br>The union of two array is : <br>";
    $uni = array_merge($a, $a1);
    print_r(array_unique($uni));
    break;

  case 7:
    echo "<br><br>The intersect of two array is : <br>";
    $int = array_merge($a, $a1);
    print_r(array_intersect($int));
    break;

  case 8:
    echo "<br><br>The Difference of two array is : <br>";
    print_r(array_diff($a, $a2));
    break;

  default:
    echo "Invalid choice......";
}


?>