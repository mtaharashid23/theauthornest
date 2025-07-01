<?php
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $phone = htmlspecialchars($_POST["phone"] ?? "");
    $services = htmlspecialchars($_POST["services"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'm.shariq1993@gmail.com';          // Your Gmail
        $mail->Password   = 'iroeqvusbnsuphmv';            // App Password from Google
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & recipient
        $mail->setFrom('yourgmail@gmail.com', 'Website Contact Form');
        $mail->addAddress('jonathan@theauthornest.com');
        $mail->addAddress('jahanzebansari503@gmail.com');
        $mail->addAddress('m.shariq1993@gmail.com');

        // Email content
        $mail->isHTML(false);
        $mail->Subject = "New Inquiry for $services Service";
        $mail->Body    = "Name: $name\nEmail: $email\nPhone: $phone\nService: $services\nMessage: $message";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Failed to send message. Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(403);
    echo "Access Denied";
}
?>
