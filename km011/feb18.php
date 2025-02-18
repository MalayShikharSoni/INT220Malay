<?php

$price = 0;
$quantity = 0;
$totalPrice = 0;
$discountPercentage = 0;
$finalPrice = 0;

if(isset($_POST["calculate"])){
    $price = (float) $_POST["price"];
    $quantity = (float) $_POST["quantity"];

    $totalPrice = $price * $quantity;
    if($totalPrice > 5000){
        $discountPercentage = 25;
    }
    else if($totalPrice > 3500){
        $discountPercentage = 20;
    }
    else if($totalPrice > 2500){
        $discountPercentage = 20;
    }
    else if($totalPrice > 1000){
        $discountPercentage = 10;
    }
    else if($totalPrice > 500){
        $discountPercentage = 5;
    }

    
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

    <h1>Welcome to new page</h1>
    <h2>Simple PHP Form</h2>

    <form action="" method="POST">

        <!-- <input type="checkbox" id="s1" name="sport[]" value="cricket">
        <label for="s1">I like Cricket</label><br>
        <br><br>
        <input type="checkbox" id="s2" name="sport[]" value="football">
        <label for="s2">I like football</label><br>
        <br><br>
        <input type="checkbox" id="s3" name="sport[]" value="tennis">
        <label for="s3">I like tennis</label><br>
        <br><br>
        <input type="checkbox" id="s4" name="sport[]" value="volleyball">
        <label for="s4">I like volleyball</label>
        <br><br>
        <input type="submit" name="submit" value="Submit"> -->

        <label for="price">Product Price (Rs):</label>
        <input type="number" step="0.01" name="price" id="price" required><br><br>

        <label for="price">Quantity:</label>
        <input type="number" step="0.01" name="quantity" id="quantity" required><br><br>

        <button type="submit" name='calculate'>Calculate</button>

    </form>
    <?php if(isset($_POST["caclulate"])): ?>

        <hr>
        <p>
            <strong>Total Price (no discount): </strong> Rs
            <?php echo number_format($totalPrice,2); ?>
        </p>

        <p>
            <strong>Discount Applied:</strong>
            <?php echo $discountPercentage; ?>%
        </p>

        <p>
            <strong>Final Price (after discount):</strong> Rs
            <?php echo number_format($finalPrice,2); ?>
        </p>

    <?php endif; ?>
    

</body>
</html>

<!-- if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["sport"])) {
        echo "<h3>You like:</h3>";
        echo "<ol>";
        foreach($_POST["sport"] as $selected) {
            echo "<li>" . htmlspecialchars($selected) ."</li>";
        }
        echo "</ol>";
    }
    else{
        echo "<h3> No sport selected.</h3>";
    }
} -->