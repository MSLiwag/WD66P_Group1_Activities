<?php
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$emailaddress = $_POST['emailAddress'];


    if ($_POST["password"] == $_POST["confirmPassword"]){
        $residingAt = ucwords($address) . " " . ucwords($city) . " " . ucwords($province);

        echo "Hi " . ucwords($_POST["firstName"]) ." " . ucwords($_POST["lastName"]);
        echo "<br>";
        echo "Welcome to MORASC";
        echo "<br>";
        echo "Your birthday is " . $_POST["birthday"];
        echo "<br>";
        echo "You are currently residing at " . $residingAt;
        echo "<br>";
        echo "Your email address is " . strtolower($_POST["emailAddress"]);
        echo "<br>";
        if (array_key_exists("newsletter", $_POST)){
        echo "Thank you for subscribing to our newsletter";
            }
        echo "<br>";
        echo "Thank you for registering";
    }
else {
    echo "Your password does not match. Please try again";
}