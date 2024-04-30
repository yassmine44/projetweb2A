<?php
include "../controller/eventC.php";
session_start();
$eventC=new eventC();

if (isset($_POST["supprimer"]) && isset($_POST["IDoffre"])) {
    $eventC->supprimerevent($_POST["IDoffre"]);
    echo "<script>window.location.href = '/thisis/views/BACK/afficherof.php';</script>";
    exit();
}
?>
