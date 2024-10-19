<?php
$name=$_POST['name'];
$class=$_POST['class'];
$address=$_POST['address'];

setcookie("name","$name",time()+3660);
setcookie("class","$class",time()+3660);
setcookie("address","$address",time()+3660);

?>


<html>
  <body>
    <form method="post" action="21.2.php">
      <b>
        Enter Marks of Physics :
        <input type="number" name="phy"><br><br>
        Enter Marks of Biology :
        <input type="number" name="bio"><br><br>
        Enter Marks of  Chemistry :
        <input type="number" name="chem"><br><br>
        Enter Marks of  Maths :
        <input type="number" name="math"><br><br>
        Enter Marks of  Marathi :
        <input type="number" name="marathi"><br><br>
        Enter Marks of  English :
        <input type="number" name="eng"><br><br><br><br>
</b>
<input type="submit" value="Submit">
    </form>
  </body>
</html>