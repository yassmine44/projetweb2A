<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\userU.php';

// Vérifier si l'identifiant de l'entreprise est envoyé
if(isset($_POST['id'])) {
    $userU = new userU();
    $user = $userU->showuser($_POST['id']);
    //var_dump($user); // Retirez ou commentez cette ligne une fois le débogage terminé
?>

<form method="POST" action="modifierU.php">
    id: <input type="text" name="id" value="<?= $user['id']; ?>" readonly><br>
    nom: <input type="text" name="nom" value="<?= $user['nom']; ?>"><br>
    prenom: <input type="text" name="prenom" value="<?= $user['prenom']; ?>"><br>
    phone: <input type="text" name="phone" value="<?= $user['phone']; ?>"><br>
    role: <input type="text" name="role" value="<?= $user['role']; ?>"><br>
    password: <input type="text" name="password" value="<?= $user['password']; ?>"><br>
    date_de_naissance: <input type="text" name="date_de_naissance" value="<?= $user['date_de_naissance']; ?>"><br>
    email: <input type="text" name="email" value="<?= $user['email']; ?>"><br>
    <input type="submit" name="update" value="Save">
</form>

<?php
} else {
    echo "Erreur: Aucun identifiant d'entretien trouvé.";
}
?>
