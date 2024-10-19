<?php
$email=$_POST['email'];
$regex='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.a-z0-9-]+)*(\.[a-z]{2,3})$/';

if(preg_match($regex,$email))
{
  echo $email  .  "<br>Your Email is Valid.";
}
else
{
  echo $email  .  "<br>Your Email is not Valid.";
}






?>