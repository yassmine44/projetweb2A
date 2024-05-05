<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\userU.php';
include 'C:\xampp\htdocs\gestionentretien\Model\user.php';
$error = "";

// create client
$user = null;
// create an instance of the controller
$userU = new userU();

if (
    isset($_POST['id']) && 
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) && 
    isset($_POST["phone"]) &&
    isset($_POST["role"]) &&
    isset($_POST["password"]) &&
    isset($_POST["date_de_naissance"]) && 
    isset($_POST["email"]) 
) {
    if (
        !empty($_POST['id']) && 
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["role"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["date_de_naissance"]) &&
        !empty($_POST["email"])
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $user = new user(
            $_POST['id'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['phone'],
            $_POST['role'],
            $_POST['password'],
            $_POST['date_de_naissance'],
            $_POST['email']
        );
        var_dump($user);
        
        $userU->updateuser($user , $_POST['id']);
        header('Location:table-datatable.php');
    } else {
        $error = "Missing indate_de_naissanceion";
    }
}
