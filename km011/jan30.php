<?php 

$books = array("C++" => array("name" => "Beginning with C", "copies" => 8),
            "PHP" => array("name" => "Basics of PHP", "copies" => 10),
            "Laravel" => array("name" => "MVC", "copies" => 3)

);

$keys = array_keys( $books );

for( $i = 0; $i < count($books); $i++) {
    echo "$keys[$i] ";
    foreach( $books[$keys[$i]] as $key => $value ) {
        echo $key . " = " . $value . "\n";

    }
}

echo"\n";

$number = [10,20,30,40,50,60,70,80,90,100];

for( $i = count($number)-1; $i >= 0; $i-- ) {
    echo $number[$i] ."\n";
}

$fruits = array("Apple", "kiwi","banana");
print_r( $fruits );


?>