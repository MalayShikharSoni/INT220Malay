<?php 

define("PI",3.14);

const x = 10;

function show() {
    echo "The value of PI is " .PI . "\n";
    echo "The value of x is " . x ."\n";
}

show();

echo"\n";

$name = array("Skibidi","Rizz","Sigma","Quandangle","Dingle","Lebron","James");
$size = count($name);

for ($i = 0; $i < $size; $i++) {

    echo "". $name[$i] ."\n";
}

echo "\n";


$n = array(1,2,3,4,5);

$size2 = count($n);

for ($i = 0; $i < $size2; $i++) {
    echo "". $n[$i] ."\n";
}

echo "\n";


$arr1 = [10, "asd", 1.55, true];

// print_r($arr1);

// $ size3 = count($arr1);

$i = 0;

while($i < count($arr1)) {
    echo "The value in array is ". $arr1[$i] ."\n";
    $i++;
}

echo"\n";

foreach ($arr1 as $a) {
    echo "The value is ". $a ."\n";
}

echo"\n";


$arr2d = array(array(1,2,3,4,5), array('a','b','c','d','e'), array("Physics"=>80, "Chemistry"=>45, "Maths"=>60));

foreach ($arr2d as $a) {
    foreach ($a as $b) {
        echo "The value is ". $b ."\n";
    }
}

echo"\n";

$branch["CSE"] = "Computer Science and Engineering";
$branch["IT"] = "Information Technology";
$branch["EC"] = "Electronics and Communication";
$branch["CE"] = "Civil Engineering";

// print_r($branch);

foreach ($branch as $k => $v) {
    echo "". $k ." => ". $v ."\n";
}

echo"\n";

$result = array(
    array("Manoj", 7.8, "pass"),
    array("Aditya", 8.5, "pass"),
    array("Anuj", 4.9, "fail")
);

for( $i = 0; $i < count($result); $i++ ) {
    for( $j = 0; $j < count($result[$i]); $j++ ) {
        echo "The value is ". $result[$i][$j] ."\n";
    }
    echo "\n";
}

$books = array("C++" => array("name" => "Beginning with C", "copies" => 8),
            "PHP" => array("name" => "Basics of PHP", "copies" => 10),
            "Laravel" => array("name" => "MVC", "copies" => 3)

);

$keys = array_keys( $books );

for( $i = 0; $i < count($books); $i++) {
    echo "<h1>$keys[$i]</h1>";
}

?>