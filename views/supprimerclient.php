<?php
    include "../controller/clientC.php";
    session_start();
    $clientC = new clientC();

    if (isset($_POST["id"])) {
        $clientC->supprimerclient($_POST["id"]);

        // Redirect to condidatlist.php using JavaScript
        echo "<script>window.location.href = '/thisis/views/BACK/affichercl.php';</script>";
        exit();
    }
?>
