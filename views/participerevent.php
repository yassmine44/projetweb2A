<?php
include "../controller/Affectation_event_to_clientC.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$affectation_event_to_clientC = new Affectation_event_to_clientC();

// Assuming you have already processed and sanitized the form data
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$login = $_POST["login"];
$password = $_POST["password"];
$cv = $_POST["cv"];
$exp = $_POST["exp"];
$offreFK = $_POST["offreFK"]; // Assuming you're receiving the offer ID from the form

// Insert the candidate into the client table
$clientFK = $clientC->ajouterclient($nom, $prenom, $email, $login, $password, $cv, $exp);

// Establish the relationship between client and offre
$affectation_event_to_clientC->participer($offreFK, $clientFK);

// Redirect to the packages.php page
header('Location: packages.php');
?>
