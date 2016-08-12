<?php
$servername = "localhost";
$username = "natsugtr_roofcon";
$password = "desires123";
$dbname  = 'natsugtr_therestaurant_contacts';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>


