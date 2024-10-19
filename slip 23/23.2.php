<html>
  <body>


<?php
echo "<b>";
echo "<h3>Customer Details </h3>";
echo "<br><br><table border=1 width=30%>";
echo "<tr><td>";
echo "Customer Name : ". $_COOKIE["name"]."<br>";
echo "</td></tr>";

echo "<tr><td>";
echo "Customer Address : ". $_COOKIE["address"]."<br>";
echo "</td></tr>";

echo "<tr><td>";
echo "Customer Phone Number : ". $_COOKIE["phno"]."<br>";
echo "</td></tr>";
echo "</table>";


echo "<h3>Bill Details </h3>";
echo "<br><br><table border=1 width=30%>";
echo "<tr><td>";
echo "Product Name : ". $_REQUEST["pname"]."<br>";
echo "</td></tr>";

echo "<tr><td>";
echo "Product Quantity : ". $_REQUEST["quan"]."<br>";
echo "</td></tr>";

echo "<tr><td>";
echo "Product Rate : ". $_REQUEST["rate"]."<br>";
echo "</td></tr>";
echo "</table>";
echo "</b>";



$quan=$_POST['quan'];
$rate=$_POST['rate'];
$total=$quan * $rate;
echo "<br><br>Total is : ".$total;
?>
  </body>
</html>
