<?php
include '../../../Controller/blog_con.php';
include '../../../Model/blog.php';

// Création d'une instance du contrôleur des événements
$blogC = new blogCon("blog");

if (isset($_GET['id'])){
    $current_id = $_GET['id'];

    $res = $blogC->deleteBlog($current_id);

    if ($res){
        header('Location: ./gestion_blog.php');
        exit();
    }
    else{
        header('Location: ./gestion_blog.php');
        exit();
    }
}
else{
    header('Location: ./gestion_blog.php');
    exit();
}


?>