<?php

$pname=$_POST['pname'];
$hostname="127.0.0.1";
$db_name="employee_project";
$username="root";
$password="";

$conn=mysqli_connect("$hostname","$username","$password","$db_name")or
die("unable to connect");

if(!$conn)
{
  echo"Unable to connect";
  exit;
}

  if($stmt=$conn->query("select * from project,employee,emp_proj
    where project.pno=emp_proj.pno and employee.eno=emp_proj.eno 
    and p_name='$pname'"))
    {
      echo "<table border=2 width=50%>";
      echo "<tr><th>E_No</th>
            <th>E_Name</th>
            <th>Qualification</th>
            <th>Join Date </th></tr>";

            while($row=$stmt->fetch_assoc())
            {
              echo "<tr align=center><td>".$row['eno']."</td>";
              echo "<td>".$row['e_name']."</td>";
              echo "<td>".$row['qualification']."</td>";
              echo "<td>".$row['joindate']."</td></tr>";
            }
            echo "</table>";
    }


 ?>