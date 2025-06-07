<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);


if (isset($_POST["submit"]) && $_SERVER['REQUEST_METHOD'] == "POST") {
  
  $formType = $_POST['form_type']; // Get the form type
  
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '8215f4001@smtp-brevo.com';
        $mail->Password = '6OI0QKcRmZUDCS3a';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient (common)
        $mail->setFrom('sangramm7@gmail.com', 'Website Form'); // generic from name
        $mail->addAddress('mail.wisetech@gmail.com', 'WiseTech');

        $mail->isHTML(true); // Enable HTML emails

        if ($formType == "contact") {
            // Contact Form Logic
            $name = htmlspecialchars(trim($_REQUEST['name']));
            $email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Handle invalid email (optional: redirect with error)
                header("Location: contact.php?status=invalid_email");
                exit();
            }
            $message = $_REQUEST['message'];

            $mail->Subject = "New Contact Form Message from $name";
            $mail->Body = "<h4>Name: $name</h4>
                            <h4>Email: $email</h4>
                            <p>Message: $message</p>";

        } elseif ($formType == "quote") {
            // Quote Form Logic
            $quoteName = htmlspecialchars(trim($_REQUEST['name']));
            $quotePhone = htmlspecialchars(trim($_REQUEST['phone']));
            $quoteEmail = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($quoteEmail, FILTER_VALIDATE_EMAIL)) {
                header("Location: service.php?status=invalid_email");
                exit();
            }
            $quoteMessage = $_REQUEST['message'];
            // $quoteService = $_REQUEST['service']; // Add service field

            $mail->Subject = "New Quote Request from $quoteName";
            $mail->Body = "<h4>Name: $quoteName</h4>
                            <h4>Email: $quoteEmail</h4>
                            <h4>Phone: $quotePhone</h4>
                            <h4>Service: </h4>
                            <p>Message: $quoteMessage</p>";

        } elseif ($formType == "subscribe") {
            // Subscribe Form Logic
            $subscribeEmail = filter_var($_REQUEST['subscribe_email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($subscribeEmail, FILTER_VALIDATE_EMAIL)) {
                header("Location: service.php?status=invalid_email");
                exit();
            }

            $mail->Subject = "New Subscription Request";
            $mail->Body = "<p>Email: $subscribeEmail</p>";

        } else {
            // Unknown form type
            header("Location: index.php?status=unknown_form"); // Or another appropriate page
            exit();
        }

        $mail->send();

        // ✅ Success - Redirect with success message
        if($formType == "contact") {
            header("Location: contact.php?status=success");
        } elseif ($formType == "quote") {
            header("Location: service.php?status=success");
        } elseif ($formType == "subscribe") {
            header("Location: service.php?status=success");
        }
        exit();

    } catch (Exception $e) {
        // ❌ Error - Redirect with error message
        if($formType == "contact") {
            header("Location: contact.php?status=error");
        } elseif ($formType == "quote") {
            header("Location: service.php?status=error");
        } elseif ($formType == "subscribe") {
            header("Location: service.php?status=error");
        }
        exit();
    }
}
?>