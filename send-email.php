<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email details
    $to = "shahedhasan.w1@gmail.com";  // Your email address
    $subject = "New Message from Contact Form";
    $messageBody = "Name: $name\nEmail: $email\nMessage: \n$message";
    
    // Headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Sorry, something went wrong.";
    }
}
?>
