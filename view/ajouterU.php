<?php
require '../Controller/userU.php'; 
include '../Model/user.php';

$error = "";

// Créer une instance du contrôleur
$userU = new userU();
// Créer un objet user
$user = null;

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si toutes les données requises sont fournies
    if (
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["phone"])&&
        isset($_POST["role"]) &&
        isset($_POST["password"]) &&
        isset($_POST["date_de_naissance"]) &&
        isset($_POST["email"])
    ) {
        // Vérifier si les champs requis ne sont pas vides
        if (
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["phone"])&&
            !empty($_POST["role"]) &&
            !empty($_POST["password"]) &&
            !empty($_POST["date_de_naissance"]) &&
            !empty($_POST["email"])
        ) {
            // Créer un objet user avec les données du formulaire
            $user = new user(
                null, // L'ID sera auto-incrémenté, donc vous pouvez passer null ici
                $_POST["nom"],
                $_POST["prenom"],
                $_POST["phone"],
                $_POST["role"],
                $_POST["password"],
                $_POST["date_de_naissance"],
                $_POST["email"]
            );

            // Ajouter l'user à la base de données en appelant la méthode ajouteruser()
            $userU->ajouteruser($user);

            // Rediriger vers une page de confirmation ou autre
            header('Location:listeuser.php');
            exit();
        } else {
            $error = "Des informations sont manquantes";
        }
    }
}
?>

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un utilisateur</title>
</head>
<body>
    <h2>Création d'un utilisateur</h2>
    <form action="ajouterU.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="phone">Téléphone :</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="role">Rôle :</label><br>
        <input type="text" id="role" name="role" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="date_de_naissance">Date de naissance :</label><br>
        <input type="date" id="date_de_naissance" name="date_de_naissance" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Créer">
    </form>
    <?php if(!empty($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
