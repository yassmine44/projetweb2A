<?php

require_once 'vendor/autoload.php';

// Récupérer le nom d'utilisateur et le mot de passe du formulaire
$username = $_POST['username']; // Ceci doit être votre adresse e-mail complète
$appPassword = $_POST['password']; // Utilisez le mot de passe spécifique à l'application ici

// Créer le transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
    ->setUsername($username)
    ->setPassword($appPassword);

// Créer le mailer en utilisant le transport
$mailer = new Swift_Mailer($transport);

// Créer le message
$message = (new Swift_Message('Test Email'))
    ->setFrom($username) // Utilisez simplement le nom d'utilisateur ici
    ->setTo(['zikoukoutrayan@gmail.com'])
    ->setBody('je nai pas encore recu une reponse');

// Envoyer le message
$result = $mailer->send($message);
?>