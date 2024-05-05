<?php

require_once 'C:\xampp\htdocs\gestionentretien\Controller\entrepriseE.php';
// Vérification de l'existence de l'identifiant de l'entretien à supprimer

$entrepriseE= new entrepriseE();
$entrepriseE->deleteentreprise($_GET["identreprise"]);
header('Location:table-datatable-basic.php');


