<?php

echo "<br><br>Style is ".$_POST['s1'].
"<br>Size is ".$_POST['s'].
"<br>Color is ".$_POST['c'].
"<br>Background-Color is ".$_POST['bg'];

setcookie("set1",$_POST['s1'],time()+3600);
setcookie("set2",$_POST['s'],time()+3600);
setcookie("set3",$_POST['c'],time()+3600);
setcookie("set4",$_POST['bg'],time()+3600);
?>



<br><br>
<a href="21.2.php">Show</a>