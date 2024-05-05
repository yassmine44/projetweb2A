<?php
require_once 'C:\xampp\htdocs\gestionentretien\Controller\entretienC.php';

// Vérifier si l'identifiant de l'entreprise est envoyé
if(isset($_POST['IDE'])) {
    $entretienC = new entretienC();
    $entretien = $entretienC->showentretien($_POST['IDE']);
    //var_dump($entretien); // Retirez ou commentez cette ligne une fois le débogage terminé
?>

<form method="POST" action="modifier.php">
    IDE: <input type="text" name="IDE" value="<?= $entretien['IDE']; ?>" readonly><br>
    nom: <input type="text" name="nom" value="<?= $entretien['nom']; ?>"><br>
    email: <input type="text" name="email" value="<?= $entretien['email']; ?>"><br>
    titreposte: <input type="text" name="titreposte" value="<?= $entretien['titreposte']; ?>"><br>
    daterdv: <input type="text" name="daterdv" value="<?= $entretien['daterdv']; ?>"><br>
    langue: <input type="text" name="langue" value="<?= $entretien['langue']; ?>"><br>
    format: <input type="text" name="format" value="<?= $entretien['format']; ?>"><br>
    numtel: <input type="text" name="numtel" value="<?= $entretien['numtel']; ?>"><br>
    <input type="submit" name="update" value="Save">
    
</form>

<?php
} else {
    echo "Erreur: Aucun identifiant d'entretien trouvé.";
}
?>
