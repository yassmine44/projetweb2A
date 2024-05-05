<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\userU.php';
// Vérification de l'existence de l'identifiant de l'entretien à supprimer
if (isset($_GET["id"])) {
    // Inclusion du fichier de la classe entretienC
    include '../Controller/entretienC.php';
    
    // Création d'une instance de la classe entretienC
    $userU = new userU();
    
    // Suppression de l'entretien de la base de données en utilisant son idntifiant
    $userU->deleteuser($_GET["id"]);

    // Redirection vers la page de liste des entretiens
    header('Location:table-datatable-user.php');
    exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
} else {
    // Gestion de l'erreur si l'identifiant de l'entretien n'est pas spécifié
    echo "Identifiant de l'entretien non spécifié.";
}

