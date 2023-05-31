<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Set up email recipient and subject
$to = 'venkateshprasadh14@gmail.com';
$subject = 'New Contact Form Submission';

// Compose the email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Message: $message\n";

// Set additional headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  echo 'Thank you for your message. We will be in touch shortly.';
} else {
  echo 'Oops! Something went wrong. Please try again later.';
}
?>
