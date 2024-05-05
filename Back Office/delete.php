<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\entretienC.php';
// Vérification de l'existence de l'identifiant de l'entretien à supprimer
if (isset($_GET["IDE"])) {
    // Inclusion du fichier de la classe entretienC
    include '../Controller/entretienC.php';
    
    // Création d'une instance de la classe entretienC
    $entretienC = new entretienC();
    
    // Suppression de l'entretien de la base de données en utilisant son identifiant
    $entretienC->deleteentretien($_GET["IDE"]);

    // Redirection vers la page de liste des entretiens
    header('Location: table-datatable-entretien.php');
    exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
} else {
    // Gestion de l'erreur si l'identifiant de l'entretien n'est pas spécifié
    echo "Identifiant de l'entretien non spécifié.";
}

