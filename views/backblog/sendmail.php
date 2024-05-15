<?php

require_once 'vendor/autoload.php';

use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;

// Vérifier si les données du formulaire sont envoyées
if(isset($_POST['username'], $_POST['password'])) {
    // Récupérer le nom d'utilisateur et le mot de passe du formulaire
    $username = $_POST['username']; // Ceci doit être votre adresse e-mail complète
    $appPassword = $_POST['password']; // Utilisez le mot de passe spécifique à l'application ici
    
    // Vérifier si le nom d'utilisateur et le mot de passe ne sont pas vides
    if(!empty($username) && !empty($appPassword)) {
        // Créer le transport SMTP
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
            ->setUsername($username)
            ->setPassword($appPassword);
        
        // Créer le mailer en utilisant le transport
        $mailer = new Swift_Mailer($transport);
        
        // Créer le message
        $message = (new Swift_Message('Test Email'))
            ->setFrom([$username => 'Votre nom']) // Utilisez simplement le nom d'utilisateur ici
            ->setTo(['megblifamily@gmail.com'])
            ->setBody('On a recu votre comment.');
        
        // Envoyer le message
        try {
            $result = $mailer->send($message);
            echo 'Email envoyé avec succès.';
        } catch(Exception $e) {
            echo 'Une erreur est survenue : ' . $e->getMessage();
        }
    } else {
        echo 'Nom d\'utilisateur ou mot de passe manquant.';
    }
} else {
    echo 'Veuillez soumettre le formulaire.';
}
?>
