<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\entretienC.php';
include 'C:\xampp\htdocs\gestionentretien\Model\entretien.php';
$error = "";

// create client
$entretien = null;
// create an instance of the controller
$entretienC = new entretienC();

if (
    isset($_POST['IDE']) && 
    isset($_POST["nom"]) &&
    isset($_POST["email"]) && 
    isset($_POST["titreposte"]) &&
    isset($_POST["daterdv"]) &&
    isset($_POST["langue"]) &&
    isset($_POST["format"]) && 
    isset($_POST["numtel"]) 
) {
    if (
        !empty($_POST['IDE']) && 
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["titreposte"]) &&
        !empty($_POST["daterdv"]) &&
        !empty($_POST["langue"]) &&
        !empty($_POST["format"]) &&
        !empty($_POST["numtel"])
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $entretien = new entretien(
            $_POST['IDE'],
            $_POST['nom'],
            $_POST['email'],
            $_POST['titreposte'],
            $_POST['daterdv'],
            $_POST['langue'],
            $_POST['format'],
            $_POST['numtel']
        );
        var_dump($entretien);
        
        $entretienC->updateEntretien($entretien , $_POST['IDE']);
        header('Location:table-datatable-entretien.php');
    } else {
        $error = "Missing information";
    }
}
