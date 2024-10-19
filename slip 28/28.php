<?php
$tname=$_POST['tname'];
$hostname="127.0.0.1";
$db_name="student_teacher";
$username="root";
$password="";

$conn=mysqli_connect("$hostname","$username","$password","$db_name")or
die("unable to connect");

if(!$conn)
{
  echo"Unable to connect";
  exit;
}

if($stmt=$conn->query("select s_name,subject
                  from student,stud_teach,teacher
        where student.sno=stud_teach.sno and teacher.tno=stud_teach.tno 
         and t_name='$tname'"))
         {
          echo "<table border=2 width=50%>";
          echo "<tr><th>S_Name</th>";
          echo "<th>Subject</th></tr>";


          while($row=$stmt->fetch_assoc())
          {
            echo "<tr align=center><td>".$row['s_name']."</td>";
            echo "<td>".$row['subject']."</td></tr>";
          }
          echo "</table>";
         }

?>