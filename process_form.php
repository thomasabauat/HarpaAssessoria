<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // You can add more validation and processing here

    // Send email
    $to = "info@harpaassessoria.com.br";
    $subject = "New Contact Information";
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $headers = "From: webmaster@example.com";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
