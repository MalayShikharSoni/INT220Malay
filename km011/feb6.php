<?php 

$ab = [1,2,3,4,5,6,7];

function printreverse($ab){
    for($i=count($ab)-1;$i>=0;$i--){
        echo $ab[$i] . "\n";
    }
}

printreverse($ab);
echo "\n";

function fibonacci($n){
    if($n==0){
        return 0;
    }
    if($n==1){
        return 1;
    }
    return fibonacci($n-1) + fibonacci($n-2);
}

echo fibonacci(5);
echo "\n";

function listFiles($dir){
    $files = scandir($dir);
    foreach($files as $file){
        if($file == "." || $file == ".."){
            $path = $dir . DIRECTORY_SEPARATOR . $file;
            if(is_dir($path)){
                listFiles($path);
            }else{
                echo $path . "\n";
            }
        }
    }
}

// listFiles("C:\Users\LENOVO\Desktop");

echo "\n";

$lan = "PHP";

function my_test() {
    $lan = "JAVA";
    echo "You are studying " . $lan . "\n";
}

my_test();

echo "The value is: " . $lan;

echo "\n";

function my_test2() {
    static $num1 = 2;
    $num2=25;
    $num1++;
    $num2++;
    echo "Static: " . $num1 . "\n";
    echo "Non-Static: " . $num2 . "\n";
}

my_test2();
my_test2();


?>