<?php
$produit = (int)$_POST["produit"];
$dispo = $_POST["dispo"];
$nbrarticle = $_POST["nbrarticle"];
$datearr = $_POST["datearr"];


$con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
$t= $con->prepare("update stock set dispo='$dispo',nbrarticle='$nbrarticle',datearr='$datearr' where produit=$produit");
$result = $t->execute();
header('location:table-stock.php');
?>