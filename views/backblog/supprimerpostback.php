<?php
require '../../controller/postC.php';
require "../../model/post.php";


$d = new postC();
$d->supprimer($_GET["id"]);
header('Location:Afficherpostback.php');


?>