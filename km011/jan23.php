<?php

// echo "Enter today's day:\n";
// $d = trim(fgets(STDIN));
// if($d == "Fri"){
//     echo "It's Friday!";
// }




// echo "Entery any number:";
// $a = trim(fgets(STDIN));
// if($a<100){
//     echo "less than 100";

// }
// else{
//     echo "greater than 100";
// }




// $t = date("H");

// if($t<"20"){
//     echo "Have a good day!";
// }
// else{
//     echo "Have a good night!";
// }



// echo "enter day:";
// $d = trim(fgets(STDIN));
// if($d=="sat"){
//     echo "Have a nice weekend!";

// }
// else if($d== "sun"){
//     echo "Have a nice Sunday!";
// }
// else{
//     echo "Have a nice day";
// }



$marks = 69;
if($marks<33){
    echo "Fail";
}
else if($marks>=34 && $marks<50){
    echo "D grade";
}
else if($marks>= 50 && $marks< 65){
    echo "C grade";
}
else if($marks>= 65 && $marks< 80){
    echo "B grade";
}
else if($marks>= 80 && $marks< 90){
    echo "A grade";
}
else{
    echo "A+ grade";
}

echo "\n";


$age = 15;

echo ($age < 18) ?"Child\n":"Adult\n";




$num = 20;
switch($num){
    case 10:
        echo "The number is 10\n";
        break;
    
    case 20:
        echo "The number is 20\n";
        break;

    case 30:
        echo "The number is 10\n";
        break;

    default:
        echo "something else\n";
}







$ch = 'e';
switch($ch){
    case 'a':
        echo "it is a vowel\n";
        break;
    
    case 'e':
        echo "it is a vowel\n";
        break;

    case 'i':
        echo "it is a vowel\n";
        break;
    
    case 'o':
        echo "it is a vowel\n";
        break;

    case 'u':
        echo "it is a vowel\n";
        break;
    
    default:
        echo "it is a consoant\n";
}




$author = "Stephen King";
$book  = "The silence of the lambs";

switch($author){
    case "Stephen King":
        switch($book){
            case "The silence of the lambs":
                echo "The price is $700";
                break;
        }
        break;
    
    case "Shakesphere":
        switch($book){
            case "Peepee Poopoo":
                echo "PRICELESS";
                break;
            case "Harry Potter":
                echo "Vigardium Leviouuusa";
                break;
        }       

}

echo "\n";

$a = 10;
$b = 20;

$c="+";

switch($c){
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "/":
        echo $a / $b;
        break;
    default:
        echo "invalid";
}

echo"\n";