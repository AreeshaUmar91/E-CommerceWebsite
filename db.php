<?php
$servername = "localhost";
$username = "root";  // Change if needed
$password = "";  // Change if needed
$dbname = "skin care";  // Change this to match your DB

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
