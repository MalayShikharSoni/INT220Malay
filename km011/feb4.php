<?php

function msg() {
    echo "Hello World";
}

echo "\n";

msg();

echo "\n";

function cse($course, $credit) {
    echo "Course: " . $course . " Credit: " . $credit . ". " . "\n";
}

cse("PHP", 3);
cse("INT219", 4);
cse("", 3);

echo "\n";

function sum($a, $b) {
    echo "Sum: " . $a + $b . "\n";
}

sum(10, 20);

echo "\n";

function show($i=10, $j=5){

    echo "Value: " . $i+$j . "\n";

}

show();
show(20);
show(20, 30);
echo "\n";

function add(float $a, float $b) {
    return (int)($a + $b);
}

echo add(10.5, 20.5);

echo "\n";

$a = readline("Enter any number a : ");
$b = readline("Enter any number b : ");

$temp = $a;
$a = $b;
$b = $temp;

echo "a: " . $a . " b: " . $b . "\n\n";

echo add($a, $b);

echo "\n";

function display(){
    global $lang;
    $lang = "PHP";
    echo "You are studying " . $lang . "\n";
}

display();

// $lang = "C#";

echo $lang;

echo"\n";

?>  