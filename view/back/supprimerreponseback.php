<?php
require '../../controller/reponseC.php';
require "../../model/reponse.php";


$d = new reponseC();
$d->supprimer($_GET["id"]);
header('Location:Afficherreponseback.php');


?>