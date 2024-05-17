<?php
include '../../../Controller/publication_con.php';
include '../../../Model/publication.php';

// Création d'une instance du contrôleur des événements
$publicationC = new publicationCon("publication");

if (isset($_GET['id'])){
    $current_id = $_GET['id'];

    $res = $publicationC->deletePublication($current_id);

    if ($res){
        header('Location: ./gestion_publication.php');
        exit();
    }
    else{
        header('Location: ./gestion_publication.php');
        exit();
    }
}
else{
    header('Location: ./gestion_publication.php');
    exit();
}


?>