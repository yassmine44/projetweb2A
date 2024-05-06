<?php

require_once 'C:\xampp\htdocs\gestionentretien\Controller\entrepriseE.php';
include 'C:\xampp\htdocs\gestionentretien\Model\entreprise.php';
$error = "";

// create client
$entreprise = null;
// create an instance of the controller
$entrepriseE = new entrepriseE();


if (
    isset($_POST["identreprise"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["domaine"]) 

) {
    if (
        !empty($_POST['identreprise']) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["domaine"]) 
        
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $entreprise = new entreprise(
            $_POST['identreprise'],
            $_POST['nom'],
            $_POST['domaine'],
           
        );
        var_dump($entreprise);
        
        $entrepriseE->updateentreprise($entreprise, $_POST['identreprise']);
        var_dump($entreprise);

        header('Location:listentreprise.php');
    } else
        $error = "Missing information";
}



