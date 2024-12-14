<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$config = include __DIR__ . '/../config.php';

// Charger les paramètres SMTP pour Alwaysdata (environnement production)
$smtpConfig = $config['smtp']['production'];

try {
    $mail = new PHPMailer(true);

    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host = $smtpConfig['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $smtpConfig['username']; // Identifiant Alwaysdata
    $mail->Password = $smtpConfig['password']; // Mot de passe Alwaysdata
    $mail->SMTPSecure = $smtpConfig['encryption'];
    $mail->Port = $smtpConfig['port'];

    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configurer l'email
    $mail->setFrom($smtpConfig['username'], 'Formulaire de Contact'); // From : adresse Alwaysdata
    $mail->addAddress('julesvinet64@gmail.com'); // Adresse de réception (Gmail)
    $mail->addReplyTo($email, $name); // Répondre directement à l'expéditeur
    $mail->Subject = "VITRINE : Nouveau message de $name";
    $mail->Body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";

    // Envoyer l'email
    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Votre message a bien été envoyé.']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Erreur : {$mail->ErrorInfo}"]);
}
