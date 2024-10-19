<?php

$hostname="127.0.0.1";
$db_name="grocery";
$username="root";
$password="";

$connection=mysqli_connect("$hostname","$username","$password","$db_name")or
die("unable to connect");

if(!$connection)
{
  echo "Unable to connect";
  echo "Debugging Error : ".mysqli_connect_errno();
  exit;
}

if($stmt =$connection->query("SELECT * FROM `bill` ")){

  echo "<table border='2'>";

  echo "<tr><td>sr.no</td><td>Name Item</td><td>Quantity</td><td>Rate</td></tr>";

  while($row=$stmt->fetch_assoc()){

  echo "<tr><td>".$row['sno']."</td>";
  echo"<td>". $row['item name']."</td>";
  echo "<td>".$row['quantity']."</td>";
  echo "<td>".$row['rate']."</td>";
}
echo "</table>";
}

?>