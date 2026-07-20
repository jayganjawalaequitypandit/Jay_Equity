<?php
$env = parse_ini_file(__DIR__ . '/.env');
?>


<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  exit('Invalid Request');
}

// Get form data
$name    = trim($_POST['name']);
$email   = trim($_POST['email']);
$mobile = trim($_POST['phone']);
$service = trim($_POST['service']);
$message = trim($_POST['message']);

// API URL
$apiUrl = $env['REMOTE_ORIGIN'] . '/contact-us';

// Data to send
$postData = [
  "name"    => $name,
  "email"   => $email,
  "mobile"  => $mobile,
  "page"    => "contact-us",
  "source"  => "website",
  "service" => $service,
  "message" => $message
];

// Initialize cURL
$ch = curl_init($apiUrl);

curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => json_encode($postData),
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "Accept: application/json"
  ]
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {

  echo "Curl Error: " . curl_error($ch);
  exit;
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

// Decode response
$result = json_decode($response, true);

$message = $result['message'] ?? 'Something went wrong.';

if ($httpCode >= 200 && $httpCode < 300) {

  $_SESSION['toast'] = [
    'type' => 'success',
    'message' => $message
  ];
} else {

  $_SESSION['toast'] = [
    'type' => 'danger',
    'message' => $message
  ];
}

header('Location: contact-us.php');
exit;
?>