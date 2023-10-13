<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "receiver@example.com"; // Replace with your recipient's email address

    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us. Your message has been sent successfully.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>