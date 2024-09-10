<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$mail->SMTPDebug = 2;  // Debug output
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the library files

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'yaftes88@gmail.com';                 // SMTP username (Gmail address)
    $mail->Password   = 'Yafi2009';                  // SMTP password (use App Password if 2FA enabled)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('your-email@gmail.com', 'Your Name');        // Your "From" address
    $mail->addAddress('yaftes88@gmail.com');                    // Add a recipient

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = 'This is the message body with <b>HTML</b> support.';

    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
