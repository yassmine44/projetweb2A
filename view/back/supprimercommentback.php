<?php

require "../../model/comment.php";
require "../../controller/commentC.php";
$d = new commentC();
$d->supprimer($_GET["id"]);
header('Location:Affichercommentback.php');


?>