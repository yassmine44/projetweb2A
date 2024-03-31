<?php
include 'config.php';
$conn = config::getConnexion();
try {


    $pwd = "Foulen";
    $email = "foulengmail.com";


    /**Préparer l'instruction */
    $requette = $conn->prepare("INSERT INTO user(pwd,email) VALUES (:pwd,:email)");

    //**********************bind pour associer des valeurs spécifiques à chaque paramètre de la requête préparée*************
    $requette->bindParam(':pwd', $pwd);
    $requette->bindParam(':email', $email);

    $pwd = "2A12";
    $email = "2A12@gmail.com";
    $requette->execute();

    echo 'added with success';
} catch (PDOException $e) {
    echo 'echec de connexion:' . $e->getMessage();
}
?>
