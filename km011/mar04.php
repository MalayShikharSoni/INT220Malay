<?php

$cookie_name = "user";
$cookie_value = "malay shikhar soni";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");

setcookie("user", "", time() + 3600, "/");

echo "Cookie 'user' has been deleted <br>";

setcookie("user", "Malay Shikhar Soni", time() + 3600, "/");
setcookie("email", "malay@gmail.com", time() + 3600, "/");
setcookie("regno", "12326205", time() + 3600, "/");
setcookie("phoneno", "1234567890", time() + 3600, "/");

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!<br>";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . ".<br>";
}

if (isset($_COOKIE["regno"])) {
    echo "Cookie 'regno' is set!<br>";
    echo "Value is: " . $_COOKIE["regno"] . ".<br>";
} else {
    echo "Cookie 'regno' is not set!<br>";
}

if (isset($_COOKIE["phoneno"])) {
    echo "Cookie 'phoneno' is set!<br>";
    echo "Value is: " . $_COOKIE["phoneno"] . ".<br>";
} else {
    echo "Cookie 'phoneno' is not set!<br>";
}

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

setcookie("Student", "LPU", time() + 300, "/", "", true, true);

?>
