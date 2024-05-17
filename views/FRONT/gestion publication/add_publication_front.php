<?php
include '../../../Controller/publication_con.php';
include '../../../Model/publication.php';

// Création d'une instance du contrôleur des événements
$publicationC = new publicationCon("publication");

// Création d'une instance de la classe Event
$publication = null;

if (
    isset($_POST["title_publication"]) &&
    isset($_POST["contenu_publication"])
) {
    if (
        !empty($_GET['id_blog']) &&
        !empty($_POST['title_publication']) &&
        !empty($_POST["contenu_publication"])
    ) {
        echo("fgg");
        

        // get current date
        $currentDate = date("Y-m-d");

        $publication = new Publication(
            '',
            $_GET['id_blog'],
            $_POST['title_publication'],
            $_POST['contenu_publication'],
            $currentDate
        );

        $publicationC->addPublication($publication);
        header('Location: ./blog-post.php?id=' . $_GET['id_blog']);
    } else {
        #$error = "Missing information";
    }
}

?>

