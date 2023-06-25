<?php
if ($_POST["password"] == $_POST["confirmPassword"]){
    echo "Hi " . ucwords($_POST["firstName"]) ." " . ucwords($_POST["lastName"]);
    echo "<br>";
    echo "Welcome to My System";
    echo "<br>";
    echo "Your birthday is " . $_POST["birthday"];
    echo "<br>";
    echo "You are currently residing at " . ucwords($_POST["address"]);
    echo "<br>";
    echo "Your email address is " . strtolower($_POST["emailAddress"]);
    echo "<br>";
    if (array_key_exists("newsletter", $_POST)){
        echo "Thank you for subscribing to our newsletter";
    }
    echo "<br><br>";
    echo "Thank you for registering";
}
else {
    echo "Your password does not match. Please try again";
}
?>