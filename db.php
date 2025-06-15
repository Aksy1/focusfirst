<?php
$servername = "localhost";     // Usually localhost
$username   = "root";          // Use your database username
$password   = "";              // Use your database password (empty for XAMPP by default)
$dbname     = "focus first"; // Change to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set charset to support UTF-8 characters
$conn->set_charset("utf8mb4");
?>

