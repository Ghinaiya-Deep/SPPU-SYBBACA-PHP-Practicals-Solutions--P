<?php
session_start();
if(!isset($_SESSION['total']))
{
$_SESSION['total']=0;
}
if(isset($_POST['submit']))
{
$_SESSION['pname']="KACHI GHANI MUSTARD OIL (L)";
$_SESSION['amt']="100";
$_SESSION['total']=$_SESSION['total']+100;
}
?>
<html>
<head>
</head>
<body>
<center><strong>shopping mall</strong></center><br><br> Total :<span style="color:red<?php if(isset($_SESSION['total'])){echo $_SESSION['total'];}?></span>
<table style="width:70%" border=1>
<tr>
<th><br><a href="22.php">1</a></th>
<th><br><a href="2.php">2</a></th>
<th><br><a href="3.php">3</a></th>
<th><br><a href="Final.php">Final</a></th>
</tr>
</table>
<br><br><br>
Product 1:
<FORM ACTION="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table style="width:40%" border=1>
<tr>

<th>Product Name</th>
<th>Price </th>
<th>action</th>
</tr>
<tr>

<th>KACHI GHANI MUSTARD OIL (L)</th>
<th>100</th>
<th>
<input type=submit name=submit value="buy">
</form></th>
</tr>
</table>
</body>
</html>