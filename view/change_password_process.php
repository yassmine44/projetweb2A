<?php
require_once '../config.php'; // Inclure votre fichier de configuration PDO

if(isset($_GET['code'])) {
    $code = $_GET['code'];

    try {
        $conn = new PDO('mysql:host=localhost;dbname=projetweb2a', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $verifyQuery = $conn->prepare("SELECT * FROM entretien WHERE code = :code");
        $verifyQuery->bindParam(':code', $code);
        $verifyQuery->execute();

        if($verifyQuery->rowCount() == 0) {
            header("Location: ../front/se_connecter.html");
            exit();
        }

        if(isset($_POST['change'])) {
            $email = $_POST['email'];
            $new_status = $_POST['new_status'];
        
            // Assurez-vous de sécuriser vos requêtes SQL en utilisant des requêtes préparées
            $stmt = $conn->prepare("UPDATE entretien SET statut = :statut WHERE email = :email");
            $status = $new_status; // Hashage du nouveau mot de passe
            $stmt->bindParam(':statut', $status);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        
            header("Location: success.html");
            exit();
        }
        
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
} else {
    header("Location: ../front/se_connecter.html");
    exit();
}
?>
