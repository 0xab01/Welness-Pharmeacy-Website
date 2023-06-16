<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "getinformationformyweb@gmail.com";

  // Set the email subject
  $subject = "New Contact Form Submission";

  // Set the email body
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    // If the email was sent successfully, redirect to the thank you page
    header("Location: thank_you.html");

    exit();
  } else {
    // If there was an error sending the email, display an error message
    echo "There was an error sending your message. Please try again.";
  }
}
?>
