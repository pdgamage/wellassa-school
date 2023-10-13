

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST['recipient']; // Replace with your Gmail email address
    $subject = $_POST['subject'];
    $message = $_POST['message'];
// Create a PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Set the SMTP server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'wellalagesa@gmail.com'; // Replace with your Gmail email address
    $mail->Password = 'elpm swlj bfcy qntx'; // Replace with your Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Set the sender and recipient
    $mail->setFrom($recipient, 'Wellassa School');
    $mail->addAddress( 'wellalagesa@gmail.com','Wellassa School');

    // Set email content
    $mail->isHTML(true);
    $mail->Subject =  $subject;
    $mail->Body = $message;

    // Send the email
    $mail->send();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wellassa school</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                text-align: center;
            }
            .container {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                padding: 20px;
                margin: 20px auto;
                max-width: 400px;
            }
            h1 {
                color: #009900;
            }
            p {
                color: #333;
            }
            a {
                text-decoration: none;
                color: #009900;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Email Sent Successfully</h1>
            <p>Your email has been sent successfully.</p>
            <a href="contact.php">Back to Home</a>
        </div>
    </body>
    </html>
    ';
    
} catch (Exception $e) {
    echo "Email sending failed: {$mail->ErrorInfo}";
}

}
?>
