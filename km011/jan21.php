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

$c=121;
$d=150;

echo "pre inc of ($c) => ".(++$c),"\n";
echo "post inc of ($c) => ".($c++),"\n";
echo "pre dec of ($d) => ".(--$d),"\n";
echo "post dec of ($d) => ".($d--),"\n\n";

echo "The value of 1 : " . ($a.$b) . "\n";  //$a.$b
echo "The value of 2 : " . ($a.=$b) . "\n\n";  //$a.=$b

$user="me";

echo $status = $user ?? "anonymous";

echo "\n";

$year = 2004;
$isLeap = false;

if($year%100==0){
    if($year%400==0){
        $isLeap=true;
    }
}
else{
    if($year%4==0){
        $isLeap=true;
    }
}

echo $year . " is " . ( $isLeap ? "a leap year.":"not a leap year") . "\n\n";

for($i=1;$i<=5;$i++){
    echo "i is : " . $i . "\n";
}

echo "\n";

$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);

foreach($superhero as $key => $value){
    echo $key . ":" . $value . "\n";
}

echo"\n";

for($i=1;$i<=10;$i++){
    echo "i is : " . $i . "\n";
    if($i==5){
        echo "applying break\n";
        break;
    }
}

echo"\n";

for($i= 1;$i<= 3;$i++){
    for($j= 1;$j<= 3;$j++){
        if($i==2 && $j==2){
            continue;
        }
        echo "$i"." ". $j . "\n";
    }
}

$num = 3;
switch($num){
    case 1:
        echo "number is equal to 1";
        break;
    case 2:
        echo "number is equal to 2";
        break;
    case 3:
        echo "number is equal to 3";
        break;
    default:
        echo "something else";
}

?>