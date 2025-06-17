<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $phone = htmlspecialchars($_POST["phone"] ?? "");
    $services = htmlspecialchars($_POST["services"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    // Main email to The Author Nest team
    $to = "info@theauthornest.com";
    $subject = "New Inquiry for $services Service";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $services\nMessage: $message";
    $headers = "From: $email";

    // Confirmation email to client (HTML format)
    $user_subject = "Thank You for Contacting The Author Nest";
    $user_headers  = "MIME-Version: 1.0\r\n";
    $user_headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $user_headers .= "From: The Author Nest <info@theauthornest.com>\r\n";

    $user_message = "
    <html>
    <head>
      <style>
        body { font-family: Arial, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0; }
        .email-container {
          max-width: 600px;
          margin: 30px auto;
          background-color: #ffffff;
          border: 1px solid #ddd;
          border-radius: 8px;
          overflow: hidden;
        }
        .email-header {
          background-color: #000053;
          color: white;
          padding: 20px;
          text-align: center;
        }
        .email-body {
          padding: 30px;
          color: #333333;
          line-height: 1.6;
        }
        .email-footer {
          background-color: #f1f1f1;
          padding: 15px;
          text-align: center;
          font-size: 13px;
          color: #777777;
        }
        .highlight {
          color: #000053;
          font-weight: bold;
        }
      </style>
    </head>
    <body>
      <div class='email-container'>
        <div class='email-header'>
          <h2>Thank You for Contacting Us</h2>
        </div>
        <div class='email-body'>
          <p>Dear <strong>$name</strong>,</p>
          <p>We have received your inquiry regarding our <span class='highlight'>$services</span> service.</p>
          <p>Our team at <strong>The Author Nest</strong> will reach out to you shortly.</p>
          <hr>
          <p><strong>Your Submission:</strong></p>
          <p>
            <strong>Email:</strong> $email<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Message:</strong> $message
          </p>
          <p style='margin-top: 25px;'>Warm regards,<br><strong>The Author Nest Team</strong></p>
        </div>
        <div class='email-footer'>
          &copy; " . date('Y') . " The Author Nest. All rights reserved.
        </div>
      </div>
    </body>
    </html>
    ";

    // Send both emails
    $send_main = mail($to, $subject, $body, $headers);
    $send_client = mail($email, $user_subject, $user_message, $user_headers);

    if ($send_main && $send_client) {
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