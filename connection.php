<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="Batch7-php";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo("Connection Successful");
?>