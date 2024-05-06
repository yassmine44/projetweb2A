<?php
require_once "C:/xampp/htdocs/gestionentretien/Controller/entretienC.php";

// Vérifier si l'e-mail est défini dans l'URL
if(isset($_GET['email'])) {
    $email = $_GET['email'];

    // Créer une instance de la classe entretienC
    $entretienC = new entretienC();

    // Mettre à jour le statut de l'entretien dans la base de données
    // Remplacez 'confirmé' par le statut que vous souhaitez définir
    echo "Entretien confirmé avec succès pour l'e-mail : $email";
    $entretienC->updateStatusByEmail($email, 'confirmé');

    // Rediriger vers une page de confirmation ou autre
    
    exit();
} else {
    // Rediriger vers une page d'erreur si l'e-mail n'est pas défini dans l'URL
    header('Location: erreur.php');
    exit();
}
?>
