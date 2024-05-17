<?php
include '../../../Controller/publication_con.php';
include '../../../Model/publication.php';

// Création d'une instance du contrôleur des événements
$publicationC = new publicationCon("publication");

// Création d'une instance de la classe Event
$publication = null;

if (isset($_GET['id'])){
    $current_id = $_GET['id'];
}

if (
    isset($_POST["id_blog"]) &&
    isset($_POST["title_publication"]) &&
    isset($_POST["contenu_publication"])
) {
    if (
        !empty($_POST['id_blog']) &&
        !empty($_POST['title_publication']) &&
        !empty($_POST["contenu_publication"])
    ) {
       
        // Check if blog image is uploaded
        if (!empty($_FILES['image_publication']['name']) && $_FILES['image_publication']['error'] === 0) {
            // Get profile photo and cover data
            $image_publication_tmp_name = $_FILES['image_publication']['tmp_name'];
            $image_publication_data = file_get_contents($image_publication_tmp_name);

            // get current date
            $currentDate = date("Y-m-d");

            $publication = new Publication(
                $current_id,
                $_POST['id_blog'],
                $image_publication_data,
                $_POST['title_publication'],
                $_POST['contenu_publication'],
                $currentDate
            );

            $publicationC->updatePublication($publication, $current_id);
            header('Location: ./gestion_publication.php');
        }
        else{
            // get current date
            $currentDate = date("Y-m-d");

            $publication = new Publication(
                $current_id,
                $_POST['id_blog'],
                '',
                $_POST['title_publication'],
                $_POST['contenu_publication'],
                $currentDate
            );

            $publicationC->updatePublicationWithoutImg($publication, $current_id);
            header('Location: ./gestion_publication.php');
        }
    } else {
        $error = "Missing information";
    }
}

?>