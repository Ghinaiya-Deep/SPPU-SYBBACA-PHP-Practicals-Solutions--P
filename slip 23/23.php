
<html>
  <body>
  <?php

setCookie('name',$_POST["name"]);

setCookie('phno',$_POST["phno"]);

setCookie('address',$_POST["address"]);

echo "<b>Hello<br>" . $_POST["name"]. " ! Enter Further Details....<br><br><br></b>";

?>

    <form method="post" action="23.2.php">
      Enter Product Name  : 
      <input type="text" name="pname"><br><br>
      Enter Quantity :
      <input type="text" name="quan"><br><br>
      Enter Rate : 
      <input type="text" name="rate"><br><br>
      <br><br>
      <input type="submit" value="Submit">
    </form>
    </body>
    </html>