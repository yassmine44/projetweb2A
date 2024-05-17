<?php
include '../../../Controller/publication_con.php';
include '../../../Model/publication.php';

// Création d'une instance du contrôleur des événements
$publicationC = new publicationCon("publication");

// Création d'une instance de la classe Event
$publication = null;

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
        
        
        if(isset($_FILES['image_publication'])) {
            $image_publication_tmp_name = $_FILES['image_publication']['tmp_name'];
            if(is_uploaded_file($image_publication_tmp_name)) {
                $image_publication_data = file_get_contents($image_publication_tmp_name);
            } else {
                echo "No file was uploaded.";
            }
        } else {
            echo "'image_publication' does not exist in the _FILES array.";
        }
        // get current date
        $currentDate = date("Y-m-d");

        $publication = new Publication(
            '',
            $_POST['id_blog'],
            $image_publication_data,
            $_POST['title_publication'],
            $_POST['contenu_publication'],
            $currentDate
        );

        $publicationC->addPublication($publication);
        header('Location: ./gestion_publication.php');
    } else {
        #$error = "Missing information";
    }
}

?>
