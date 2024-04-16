<?php
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
    $t= $con->prepare("delete from stock where produit=?");
$t ->execute (array($_GET["rep"]));
header('location:table-stock.php');
}
?>