<?php
echo $_POST ['validationCustom01'];
echo "<br />";
echo $_POST ['validationCustom02'];
echo "<br />";
echo $_POST ['validationCustom03'];
echo "<br />";
echo $_POST ['validationCustom04'];
echo "<br />";
echo $_POST ['validationCustom05'];
echo "<br />";
echo $_POST ['validationCustom06'];
echo "<br />";
echo strtolower($_POST ['validationCustomUsername']);
echo "<br />";
echo $_POST ['validationCustomPassword'];
echo "<br />";
echo $_POST ['validationCustomPassword2'];
echo "<br />";
if (isset($_POST['Subsletter'])) {
    echo "You have sucbscribed to our news letter";
} else {
    echo "";
   // Alternate code
}
echo "<br />";
echo "<br />";
echo "Thank you for Registering";