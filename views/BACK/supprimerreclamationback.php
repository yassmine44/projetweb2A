<?php

require "../../model/reclamation.php";
require "../../controller/reclamationC.php";
$d = new reclamationC();
$d->supprimer($_GET["id"]);
header('Location:Afficherreclamationback.php');


?>