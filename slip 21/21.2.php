<?php
$x=$_COOKIE['name'];
$y=$_COOKIE['class'];
$z=$_COOKIE['address'];
$phy=$_POST['phy'];
$bio=$_POST['bio'];
$chem=$_POST['chem'];
$math=$_POST['math'];
$marathi=$_POST['marathi'];
$eng=$_POST['eng'];

$total=$phy+$bio+$chem+$math+$marathi+$eng;
$per=$total / 6;
?>


<html>
  <body>
<table border="2" width="20%">
<tr>
<th rowspan="2">MARKSHEET</th>
</tr>
<tr>
<td colspan="2"><b>NAME:</b><?php echo "$x"?><br>
				<b>CLASS:</b><?php echo "$y"?><br>
				<b>ADDRESS:</b><?php echo "$z"?><br>
</tr>
<tr>
<td colspan="2">PHYSICS
<td><?php echo "$phy"?></td>
</tr>
<tr>
<td colspan="2">CHEMISTRY
<td><?php echo "$chem"?></td>
</tr>
<tr>
<td colspan="2">BIOLOGY
<td><?php echo "$bio"?></td>
</tr>
<tr>
<td colspan="2">MATHS
<td><?php echo "$math"?></td>
</tr>
<tr>
<td colspan="2">MARATHI
<td><?php echo "$marathi"?></td>
</tr>
<tr>
<td colspan="2">ENGLISH
<td><?php echo "$eng"?></td>
</tr>
<tr>
<td colspan="2">TOTAL
<td><?php echo "$total"?></td>
</tr>
<tr>
<td colspan="2">PERCENTAGE
<td><?php echo "$per"?></td>
</tr>
</table>
</body>
</html>