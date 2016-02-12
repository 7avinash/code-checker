<?php
$servername = "localhost";
$username = "root";
$password2 = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password2, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
