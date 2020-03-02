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
$pages = "CREATE TABLE pages (
page_id INT AUTO_INCREMENT PRIMARY KEY,
	page_title VARCHAR(30),
	page_des TEXT
)";
if(mysqli_query($conn,$pages)){
	echo "<br>table created";
}else{
	echo"table error";
}
?>