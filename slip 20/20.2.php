<?php

$style=$_COOKIE['set1'];
$size=$_COOKIE['set2'];
$color=$_COOKIE['set3'];
$bgcolor=$_COOKIE['set4'];
$msg="You are welcome on this page";

echo "<body bgcolor=$bgcolor>";
echo "<font style=$style  size=$size  color=$color>$msg";
echo "</font>";
echo "</font></body>";
?>