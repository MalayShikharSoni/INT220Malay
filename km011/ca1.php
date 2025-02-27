<?php

$name = $email = $rating = $comment = "";
$nameErr = $emailErr = $ratingErr = $commentErr = "";
$count = 0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is empty";
    }
    else {
        if(!preg_match("/^[a-zA-Z' ]*$/", $_POST["name"])){
            $nameErr = "Name should only contain letters and spaces.";
        }
        else {
            $name = test_input($_POST["name"]);
            $count++;
        }
    }

    if(empty($_POST["email"])){
        $emailErr = "Email is empty";
    }
    else {
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email.";
        }
        else {
            $email = test_input($_POST["email"]);
            $count++;
        }
    }

    if(empty($_POST["rating"])){
        $ratingErr = "Rating is empty";
    }
    else {
        if(! ( (int)$_POST["rating"]>0 && (int)$_POST["rating"]<6 ) ){
            $ratingErr = "Rating not in range.";
        }
        else {
            $rating = test_input((int)$_POST["rating"]);
            $count++;
        }
    }

    if(empty($_POST["comment"])){
        $commentErr = "Comment is empty";
    }
    else {
        $comment = test_input($_POST["comment"]);
        $count++;
    }

}

function test_input($input){
    return htmlspecialchars(trim(stripslashes($input)));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CA1 Malay Shikhar Soni</title>
</head>
<body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

        <h2>Submit Your Feedback</h2>
        <label for="name">Name: </label>
        <input type="text" name="name">
        <span>* <?php echo $nameErr ?></span>
        <br><br>

        <label for="email">Email: </label>
        <input type="text" name="email">
        <span>* <?php echo $emailErr ?></span>
        <br><br>

        <label for="rating">Rating (1-5): </label>
        <input type="number" name="rating">
        <span>* <?php echo $ratingErr ?></span>
        <br><br>

        <label for="comment">Comments: </label>
        <textarea name="comment" id=""></textarea>
        <span>* <?php echo $commentErr ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit Feedback">

    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($count == 4-){
                echo "<br><h3>Feedback submitted successfully!</h3>";    
            }
        }
        
    ?>
    

</body>
</html>