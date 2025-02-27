<?php
$name = $email = $password = $gender = $comment = $website = "";
$nameErr = $emailErr = $passwordErr = $genderErr = $commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z0-9' ]*$/", $name)) {
            $nameErr = "Only letters, numbers, and spaces allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } elseif (strlen($_POST["password"]) < 6) {
        $passwordErr = "Password must be at least 6 characters long";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:https?|ftp):\/\/[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>

    <h2>PHP Form Validation Example</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>

        <label for="website">Website:</label>
        <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>> Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php echo "<h2>Your Input:</h2>" . $name . "<br>" . $email . "<br>" . $password . "<br>" . $website . "<br>" . $comment . "<br>" . $gender; ?></p>

</body>
</html>
