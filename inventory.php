<?php
// Database connection
$servername = "localhost"
$username ="root";
$password ="";
$database ="computer_lab_inventory";

// Create Connection 
$conn = new mysqli($servername, $username, $password, $database);

// Check connection 
if ($conn->connect_error) {
	echo "connected succesfuly";
}


?>