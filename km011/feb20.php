<?php

$name = $email = $password = $gender = $comment = $website = "";
$nameErr = $emailErr = $passwordErr = $genderErr = $commentErr = $websiteErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST("name"));
        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $name)){
            $nameErr = "Only letters and spaces allowed";
        }
    }

    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }
    else {
        $email = test_input($_POST("email"));
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
    }
    elseif(strlen($_POST["password"]) < 6){
        $passwordErr = "Password must be at least 6 characters long";
    }
    else {
        $password = test_input($_POST["password"]);
    }

    if(empty($_POST["website"])){
        $website = "";
    }
    else {
        $website = test_input($_POST["website"]);

        if(!preg_match("/\b(?:(?https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if(empty($_POST["comment"])){
        $comment = "";
    }
    else {
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }
}

function test_input($data){
    return htmlspecialchars(stripslashes(trim($data)));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="">
        <label for="name">Name:</label><br><br>
        <input type="text">
    </form>

</body>
</html>