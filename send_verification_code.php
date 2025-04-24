<?php
// Twilio library
require_once 'vendor/autoload.php'; 
use Twilio\Rest\Client;

// Your Twilio credentials
$sid = 'your_twilio_sid';
$token = 'your_twilio_auth_token';
$from_number = 'your_twilio_phone_number';

// Generate a random 6-digit code
$verification_code = rand(100000, 999999);

// Store the verification code in a session or database for later comparison
session_start();
$_SESSION['verification_code'] = $verification_code;
$_SESSION['phone_number'] = $_POST['phone'];

// Send SMS via Twilio
$client = new Client($sid, $token);
$client->messages->create(
    $_POST['phone'], // To phone number
    [
        'from' => $from_number, // Your Twilio phone number
        'body' => "Your verification code is: $verification_code"
    ]
);

echo "Code sent!";
?>
<?php
session_start();

// Get the code entered by the user
$user_code = $_POST['code'];

// Compare it with the stored verification code
if ($user_code == $_SESSION['verification_code']) {
    echo "verified"; // Code matches
} else {
    echo "invalid"; // Code does not match
}
?>
