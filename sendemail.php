<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set up the email headers
$to = 'youremail@example.com';
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Compose the email message
$body = "<h2>Contact Form Submission</h2>";
$body .= "<p><strong>Name:</strong> $name</p>";
$body .= "<p><strong>Email:</strong> $email</p>";
$body .= "<p><strong>Subject:</strong> $subject</p>";
$body .= "<p><strong>Message:</strong> $message</p>";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  echo "Thank you for your message. We'll get back to you soon.";
} else {
  echo "Oops! Something went wrong. Please try again later.";
}
?>