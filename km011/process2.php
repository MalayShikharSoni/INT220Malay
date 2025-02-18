<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
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
}

?>