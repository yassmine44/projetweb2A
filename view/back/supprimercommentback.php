<?php
include 'C:\xampp\htdocs\gestion blog\controller\commentC.php';
$rec = new commentC();
$rec->supprimer($_GET["id"]);
header('Location:Affichercommentback.php');
?>