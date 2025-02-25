<?php

$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, 513);
echo $newstr . "<br>";


$int = 100;

if(!filter_var($int, FILTER_VALIDATE_INT) === false){
    echo "Integer is valid<br>";
}
else {
    echo "Integer is not valid<br>";
}

$float = 10.234;
if(!filter_var($float, FILTER_VALIDATE_FLOAT) === false){
    echo "Float is valid<br>";
}
else {
    echo "Float is not valid<br>";
}

$ip = "127.255.255.255";

if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
    echo "$ip is a valid IP address<br>";
}
else {
    echo "$ip is a not valid IP address<br>";
}


$email = "user@example.com";

if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    echo "$email is a valid email address<br>";
}
else {
    echo "$email is a not valid email address<br>";
}

$url = "http://www.example.com";

if(!filter_var($url, FILTER_VALIDATE_URL) === false){
    echo "$url is a valid URL<br>";
}
else {
    echo "$url is a not valid URL<br>";
}

?>

<hr>
