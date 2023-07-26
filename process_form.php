<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['phone'];

    // You can add validation and sanitization here before sending the email

    $to = "nitinjangra0981@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the form or show a thank-you message
    header("Location:index.html");exit;
}
?>