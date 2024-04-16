<?php
$idCom = (int)$_POST["idCom"];
$nom = $_POST["nom"];
$telephone = $_POST["telephone"];
$adresse = $_POST["adresse"];
$prix = $_POST["prix"];

$con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
$t= $con->prepare("update commande set nom='$nom',telephone='$telephone',adresse='$adresse',prix='$prix' where idCom=$idCom");
$result = $t->execute();
header('location:table-commande.php');
?>