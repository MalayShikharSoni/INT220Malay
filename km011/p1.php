<?php
function show(){
    echo "Hello world! <br>";
}

show();

function add($a, $b){
    echo "Sum is ". $a + $b . ".<br>";
}

add(12,23);

function si($p, $r, $t){
    echo "Simple interest is: ". ($p * $r * $t)/100 . ".<br>";
}

si(5,10,10);

class Student {
    public $name;
    public $age;

    public function showw(){
        echo "Name is: ". $this->name . "<br>";
        echo "Age is: ". $this->age . "<br>";
    }

}

$stu = new Student();
$stu->name = "Malay";
$stu->age = 20;
$stu->showw();

$file = fopen("xyz.txt","w");

if($file){
    fwrite($file, "Malay<br>");
    fclose($file);

    $file = fopen("xyz.txt","r");
    echo "Resource (File Content is): " . fgets($file);
    fclose($file);

}

else{
    echo "Unable to open file";
}

?>
