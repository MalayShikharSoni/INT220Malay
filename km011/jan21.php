<?php 

$a=12;
$b=13;
$a=$b;

echo "The value of 1 : ($a)" . "\n";  //$a=$b
echo "The value of 2 : ($a+=$b)" . "\n";  //$a=$a+$b
echo "The value of 3 : ($a-=$b)" . "\n";  //$a=$a-$b
echo "The value of 4 : ($a*=$b)" . "\n";  //$a=$a*$b
echo "The value of 5 : ($a/=$b)" . "\n";  //$a=$a/$b
echo "The value of 6 : ($a%=$b)" . "\n";  //$a=$a%$b

echo "\n";

echo "The value of 1 : ($a==$b)" . "\n";  //$a==$b
echo "The value of 2 : ($a===$b)" . "\n";  //$a===$b
echo "The value of 3 : ($a!=$b)" . "\n";  //$a!=$b
echo "The value of 4 : ($a!==$b)" . "\n";  //$a!==$b
echo "The value of 5 : ($a<$b)" . "\n";  //$a<$b
echo "The value of 6 : ($a<=$b)" . "\n";  //$a<=$b
echo "The value of 7 : ($a>$b)" . "\n";  //$a>$b
echo "The value of 8 : ($a>=$b)" . "\n";  //$a>=$b

echo "\n";

var_dump($a==$b);
var_dump($a===$b);
var_dump($a!=$b);
var_dump($a!==$b);
var_dump($a<$b);
var_dump($a<=$b);
var_dump($a>$b);
var_dump($a>=$b);


?>