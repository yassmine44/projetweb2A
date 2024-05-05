<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\entrepriseE.php';


// Vérifier si l'identifiant de l'entreprise est envoyé
if(isset($_POST['identreprise'])) {
    $entrepriseE = new entrepriseE();
    $entreprise = $entrepriseE->showentreprise($_POST['identreprise']);
    //var_dump($entreprise); // Retirez ou commentez cette ligne une fois le débogage terminé
?>

<form method="POST" action="modifierE.php">
    Id entreprise: <input type="text" name="identreprise" value="<?= $entreprise['identreprise']; ?>" readonly><br>
    Nom: <input type="text" name="nom" value="<?= $entreprise['nom']; ?>"><br>
    Domaine: <input type="text" name="domaine" value="<?= $entreprise['domaine']; ?>"><br>
    <input type="submit" name="update" value="Save">
</form>

<?php
} else {
    echo "Erreur: Aucun identifiant d'entreprise trouvé.";
}
?>
