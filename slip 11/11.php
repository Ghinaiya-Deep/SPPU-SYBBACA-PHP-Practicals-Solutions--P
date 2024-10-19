<?php
$side=$_POST['side'];
$length=$_POST['length'];
$breath=$_POST['breath'];
$radius=$_POST['radius'];

interface calculate_area
{ 
  function area($length,$c);
}

class rectangle implements calculate_area
{
function area($length,$breath)
{
  $area=$length*$breath;
  echo "Area of Rectangle : ".$area."<br>";
}
}

class square extends rectangle
{
  function area($s,$s1)
  {
    $area=$s*$s;
    echo "Area of Square is : ".$area."<br>";
  }
}

class circle
{
  function area($radius)
  {
    $area=0.5*$radius*$radius;
    echo "Area of Circle is : ".$area."<br>";
  }
}

$x=new rectangle;
$x->area($length,$breath);
$x=new square;
$x->area($side,$side);
$x=new circle();
$x->area($radius);


?>