<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "ritu_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}else{
//echo "Connected successfully";
}
?>