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

    <form action="process.php" method="POST">

        <label for="name">Name:<br></label>
        <input type="text" name="name" required>
        <br><br>
        <label for="email">Email:<br></label>
        <input type="email" name="email" required>
        <br><br>
        <label for="pass">Password:<br></label>
        <input type="password" name="pass" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

</body>
</html>