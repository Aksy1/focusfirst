<?php
require('vendor/autoload.php');
use Razorpay\Api\Api;

$api = new Api('RAZORPAY_KEY_HERE', 'RAZORPAY_SECRET_HERE');

$amount = 299 * 100; // In paise

$order = $api->order->create([
    'receipt' => uniqid(),
    'amount' => $amount,
    'currency' => 'INR'
]);

echo json_encode([
  'id' => $order['id'],
  'amount' => $amount
]);
