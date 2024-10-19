<?php

$icode=$_POST['icode'];
$iname=$_POST['iname'];
$usold=$_POST['usold'];
$rate=$_POST['rate'];

$i_code=explode(',',$icode);
$i_name=explode(',',$iname);
$i_unit=explode(',',$usold);
$i_rate=explode(',',$rate);

echo "<table align=center border=1>";

echo 
"<tr>
<td>Item Code</td>
<td>Item Name</td>
<td>Units Sold</td>
<td>Rate</td>
</tr>";

echo 
"<tr><td>".$i_code[0]."</td><td>".
$i_name[0]."</td><td>".
$i_unit[0]."</td><td>".
$i_rate[0]."</td></tr>";

echo 
"<tr><td>".$i_code[1]."</td><td>".
$i_name[1]."</td><td>".
$i_unit[1]."</td><td>".
$i_rate[1]."</td></tr>";

echo 
"<tr><td>".$i_code[2]."</td><td>".
$i_name[2]."</td><td>".
$i_unit[2]."</td><td>".
$i_rate[2]."</td></tr>";

echo 
"<tr><td>".$i_code[3]."</td><td>".
$i_name[3]."</td><td>".
$i_unit[3]."</td><td>".
$i_rate[3]."</td></tr>";

echo 
"<tr><td>".$i_code[4]."</td><td>".
$i_name[4]."</td><td>".
$i_unit[4]."</td><td>".
$i_rate[4]."</td></tr>";

echo "<tr><th colspan=4></th></tr>";
echo "</table>";
?>