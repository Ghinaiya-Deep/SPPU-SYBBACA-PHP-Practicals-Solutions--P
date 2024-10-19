<?php
include("operation.php");
$n1=$_POST['t1'];
$n2=$_POST['t2'];
$ch=$_POST['r1'];
switch($ch)
{

case 1: echo "Addition of $n1 and $n2 is ".$n1+$n2;
        break;

case 2: echo "Subtraction of $n1 and $n2 is ".$n1-$n2;
        break;

case 3: echo "Multiplication of $n1 and $n2 is ".$n1*$n2;
        break;

case 4: echo "Division of $n1 and $n2 is ".$n1/$n2;
        break;

default:
echo "Invalid Choice....";
}
?>