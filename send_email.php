<?php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = 'jayalakshmickv48@gmail.com'; // Change this to your email address
$subject = 'Contact Form Submission';
$headers = "From: $name <$email>";
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send email
if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    http_response_code(200);
    echo 'Message sent successfully!';
} else {
    // Error sending email
    http_response_code(500);
    echo 'Failed to send message. Please try again later.';
}
?>
