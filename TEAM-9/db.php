<?php
// db.php - Database connection file

$servername = "localhost";
$username = "root";
$password = ""; // Add your database password
$dbname = "IRCTC_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
