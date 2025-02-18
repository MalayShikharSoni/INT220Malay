<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["pass"]);

    echo "<h2>Form Data Submitted:<h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: ". $email ."<br>";
    echo "Pass: ". $pass ."<br>";

}
else {
    echo "Invalid request!";
}

?>                                                                 