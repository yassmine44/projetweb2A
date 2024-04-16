<?php
include '../Controller/entretienC.php';
include '../model/entretien.php';
$error = "";

// create client
$entretien = null;
// create an instance of the controller
$entretienC = new entretienC();

if (
    isset($_POST['IDE']) && 
    isset($_POST["nom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["numtel"]) &&
    isset($_POST["titreposte"]) &&
    isset($_POST["daterdv"]) &&
    isset($_POST["langue"]) &&
    isset($_POST["format"]) 
) {
    if (
        !empty($_POST['IDE']) && 
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["numtel"]) &&
        !empty($_POST["titreposte"]) &&
        !empty($_POST["daterdv"]) &&
        !empty($_POST["langue"]) &&
        !empty($_POST["format"]) 
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $entretien = new entretien(
            null,
            $_POST['nom'],
            $_POST['email'],
            $_POST['numtel'],
            $_POST['titreposte'],
            $_POST['daterdv'],
            $_POST['langue'],
            $_POST['format']
        );
        var_dump($entretien);
        
        $entretienC->showentretien($entretien);
        header('Location:listeeentretien.php');
    } else {
        $error = "Missing information";
    }
}

// Afficher le formulaire de modification
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'entretien</title>
</head>
<body>
    <h1>Modifier l'entretien</h1>
    <?php if ($error) : ?>
        <p><?php echo $error; ?></p>
    <?php else : ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             <input type="hidden" name="IDE" value="<?php echo $entretien->getIDE(); ?>" required>
            <input type="text" name="nom" value="<?php echo $entretien->getNom(); ?>" required>
            <input type="email" name="email" value="<?php echo $entretien->getEmail(); ?>" required>
            <input type="text" name="titreposte" value="<?php echo $entretien->getTitrePoste(); ?>" required>
            <input type="text" name="daterdv" value="<?php echo $entretien->getDaterdv(); ?>" required>
            <input type="text" name="langue" value="<?php echo $entretien->getLangue(); ?>" required>
            <input type="text" name="format" value="<?php echo $entretien->getFormat(); ?>" required>
            <input type="text" name="numtel" value="<?php echo $entretien->getNumTel(); ?>" required>
            <input type="submit" value="Modifier">
        </form>
    <?php endif; ?>
</body>
</html>
