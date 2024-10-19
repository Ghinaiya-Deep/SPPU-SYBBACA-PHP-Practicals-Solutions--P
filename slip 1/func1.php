<?php
function totalvowel($s)
{
  $a = 0;
  $e = 0;
  $i = 0;
  $o = 0;
  $u = 0;
  $len = strlen($s);

  for ($j = 0; $j < $len; $j++) 
  {
    switch ($s[$j]) {
      case 'a':
      case 'A':
        echo "<br>$s[$j] found at position $j";
        $a++;
        break;

      case 'e':
      case 'E':
        echo "<br>$s[$j] found at position $j";
        $e++;
        break;

      case 'i':
      case 'I':
        echo "<br>$s[$j] found at position $j";
        $i++;
        break;

      case 'o':
      case 'O':
        echo "<br>$s[$j] found at position $j";
        $o++;
        break;

      case 'u':
      case 'U':
        echo "<br>$s[$j] found at position $j";
        $u++;
        break;

    }
  }
echo "<br><br><br>Occurrences of a : $a";
echo "<br>Occurrences of e : $e";
echo "<br>Occurrences of i : $i";
echo "<br>Occurrences of o : $o";
echo "<br>Occurrences of u : $u";
}




function checkpalindrome($str)
{

$len=strlen($str);
for($i=0,$j=$len-1;$i<$len/2 && $j>=0;$i++,$j--)
{
  if($str[$i]!=$str[$j])
  {
    echo "$str is not palindrome.";
    return;
  }
}
 echo "$str is palindrome.";



}
?>