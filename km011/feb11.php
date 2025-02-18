<?php 

function add(...$numbers) {
    $sum = 0;
    foreach ($numbers as $n) {
        $sum += $n;
    }
    return $sum;
}

echo"result " . add(1,2,3,4,5,6) . "\n\n";

function addd(...$name) {
    $sum = "";

    foreach ($name as $n) {
        $sum .= $n;
    }
    return $sum;
}

echo"result " . addd("neel", "nitin", "mukesh") . "\n\n";



?>