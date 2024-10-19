<?php
$cnames = $_GET['cnm'];

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "com30";

$link = mysqli_connect("$hostname", "$username", "$password", "$db_name");
if (!$link) {
  die('Connection Failed:');
}
//$sql="SELECT * FROM student WHERE CNo IN (SELECT CNo FROM competition WHERE CName = '".$cname."')";
$sql = "select * from student,competition,stud_comp where student.stud_id=stud_comp.stud_id and competition.c_no=stud_comp.c_no and rank='1' and c_name='" . $cnames . "'";
$res = mysqli_query($link, $sql);

if (mysqli_num_rows($res) > 0) {
  while ($row = mysqli_fetch_assoc($res)) {
    echo "Stud No : " . $row['stud_id'] . "<br>" . "  Name  : " . $row['name'] . "<br>";
    echo "Class :  " . $row['class'] . "<br>";
    echo "--------------------------" . "<br>";
  }
} else {
  echo "error";
}
mysqli_close($link);

?>