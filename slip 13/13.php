<?php
$dis = $_POST['dis'];
$units = $_POST['units'];

if ($units == 'kms')
{
  $miles = $dis / 1.60934;
  echo "<br><br>The distance is " . round($miles) . $miles;
}
 else 
 
{
  $kms = $dis * 1.60934;
  echo "<br><br>The distance is " . round($kms) . $kms;
}


?>