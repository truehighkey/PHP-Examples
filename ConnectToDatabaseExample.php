<?php
// Database login credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourDBName";

// connect to our database
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){ // In case of error
    die("Connection Failed! " . $conn->connect_error); // print the error message
}
echo "Connected Successfully!"
?>