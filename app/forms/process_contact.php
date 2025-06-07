<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST["submit"]) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['form_type'] !== 'contact') {
        header("Location: ../contact.php?status=unknown_form");
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
        $name = htmlspecialchars(trim($_POST['name']));
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../contact.php?status=invalid_email");
            exit();
        }
        $message = $_POST['message'];

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Message from $name";
        $mail->Body = "<h4>Name: $name</h4>
                       <h4>Email: $email</h4>
                       <p>Message: $message</p>";

        $mail->send();

        // Success
        header("Location: ../contact.php?status=success");
        exit();

    } catch (Exception $e) {
        // Error
        header("Location: ../contact.php?status=error");
        exit();
    }
} else {
    // Direct access to this file
    header("Location: ../contact.php"); // Or another appropriate page
    exit();
}
?>