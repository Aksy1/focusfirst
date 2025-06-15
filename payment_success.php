<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$payment_id = $_POST['payment_id'];

$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, payment_id, status) VALUES (?, ?, ?, ?, 'success')");
$stmt->bind_param("ssss", $name, $email, $phone, $payment_id);
$stmt->execute();
$stmt->close();

// WhatsApp API (UltraMsg or Twilio Example)
$msg = urlencode("Hello $name,\nThank you for booking! Your payment ID is $payment_id.");
$token = "YOUR_ULTRAMSG_TOKEN";
$instance_id = "YOUR_INSTANCE_ID";

// Example using UltraMsg
file_get_contents("https://api.ultramsg.com/$instance_id/messages/chat?token=$token&to=+91$phone&body=$msg");

echo "✅ Payment successful! Confirmation sent to WhatsApp.";
