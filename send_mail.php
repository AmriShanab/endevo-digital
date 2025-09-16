<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Gmail SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'amrishanab@gmail.com';   // your full Gmail/Workspace email
        $mail->Password   = 'Aayeshanuha@2003';         // App Password from Google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender must be the Gmail/Workspace mailbox
        $mail->setFrom('amrishanab@gmail.com', 'Endevo Digital');
        // Add reply-to with visitor’s email
        $mail->addReplyTo($email, $name);

        // Recipient (your admin email)
        $mail->addAddress('amrishanab@gmail.com', 'Admin');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Message';
        $mail->Body    = "<b>Name:</b> $name <br><b>Email:</b> $email <br><b>Message:</b><br>$message";

        $mail->send();
        echo "Message has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
