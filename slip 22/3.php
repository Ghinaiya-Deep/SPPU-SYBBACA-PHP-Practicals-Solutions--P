<?php
session_start();
if(!isset($_SESSION['total']))
{
$_SESSION['total']=0;
}
if(isset($_POST['submit']))
{
$_SESSION['pname']=$_SESSION['pname'].","."Patanjali mango juices";
$_SESSION['amt']=$_SESSION['amt'].","."70";
$_SESSION['total']=$_SESSION['total']+70;
}
?> <html>
<head>
</head>
<body>
<center><strong>shopping mall</strong></center> Total <span style="color:red;"><?php if(isset($_SESSION['total'])){echo $_SESSION['total'];}?></span></h1>

<br><br>
<a href="22.php">1</a><br>
<a href="2.php">2</a><br>
<a href="3.php">3</a><br>
<a href="Final.php">Final</a><br>
<br><br><br><br>

Product 3:
<FORM ACTION="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table style="width:40%" border=1>
<tr>
<th>Product Name</th>
<th>Price </th>
<th>action</th>
</tr><br> <tr>

<th>Patanjali mango juices</th>
<th>70</th>
<th>
<input type=submit name=submit value="buy" >
</form>
</tr>
</table>
</body>
</html>