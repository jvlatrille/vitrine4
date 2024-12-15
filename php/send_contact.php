<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$config = include __DIR__ . '/../config.php';

$smtpConfig = $config['smtp']['production'];

try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = $smtpConfig['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $smtpConfig['username'];
    $mail->Password = $smtpConfig['password'];
    $mail->SMTPSecure = $smtpConfig['encryption'];
    $mail->Port = $smtpConfig['port'];

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail->setFrom($smtpConfig['username'], 'Formulaire de Contact');
    $mail->addAddress('julesvinet64@gmail.com');
    $mail->addReplyTo($email, $name);
    $mail->Subject = "VITRINE : Nouveau message de $name";
    $mail->Body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Votre message a bien été envoyé.']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Erreur : {$mail->ErrorInfo}"]);
}
