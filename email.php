<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $phone = htmlspecialchars($_POST["phone"] ?? "");
    $services = htmlspecialchars($_POST["services"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    $to = "info@theauthornest.com";
    $subject = "New Inquiry for $services Service";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $services\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        http_response_code(500);
        echo "Failed to send message.";
    }
} else {
    http_response_code(403);
    echo "Access Denied";
}
?>