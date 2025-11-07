<?php
$servername = "localhost"; // Or your database host
$username = "root";
$password = "";
$dbname = "yogire_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Set charset to handle special characters
$conn->set_charset("utf8mb4");
?>