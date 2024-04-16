<?php
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
    $t= $con->prepare("delete from commande where idCom=?");
$t ->execute (array($_GET["rep"]));
header('location:table-commande.php');
}
?>