<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST["submit"]) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['form_type'] !== 'subscribe') {
        header("Location: ../service.php?status=unknown_form");
        exit();
    }

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '8215f4001@smtp-brevo.com';
        $mail->Password = '6OI0QKcRmZUDCS3a';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom('sangramm7@gmail.com', 'Website Form');
        $mail->addAddress('mail.wisetech@gmail.com', 'WiseTech');

        // Form Data
        $subscribeEmail = filter_var($_POST['subscribe_email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($subscribeEmail, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../service.php?status=invalid_email");
            exit();
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Subscription Request";
        $mail->Body = "<p>Email: $subscribeEmail</p>";

        $mail->send();

        // Success
        header("Location: ../service.php?status=subscribe_success");
        exit();

    } catch (Exception $e) {
        // Error
        header("Location: ../service.php?status=subscribe_error");
        exit();
    }
} else {
    // Direct access to this file
    header("Location: ../service.php"); // Or another appropriate page
    exit();
}
?>