<?php
// One-time script to create an admin (save as create_admin.php, run it once)

include 'db.php';

$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "Admin created!";
?>
