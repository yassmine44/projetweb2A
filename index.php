<?php
include 'config.php';
include 'Condida.php'; // Inclure votre classe Candida
include 'offremploi.php'; // Inclure votre classe OffreEmploi

// Traitement des actions de formulaire (ajout de candidature, etc.)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] == 'addCondida') {
        // Ajouter une nouvelle candidature
        $condida = new condida();
        // Assurez-vous de récupérer les données du formulaire et de les valider avant de les passer à la méthode addCandida
        // $candida->addCandida(...);
    }
}

// Récupérer et afficher les données des candidatures et des offres d'emploi
$candida = new condida();
$ccondida = $condida->listCondida(); // Supposant que vous avez une méthode listCandida() pour récupérer les candidatures
$offresmploi = new offremploi();
$offres = $offremploi->listoffremploi(); // Supposant que vous avez une méthode listOffreEmploi() pour récupérer les offres d'emploi

// Générer le contenu HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Candidatures et des Offres d'emploi</title>
    <!-- Include your CSS stylesheets here -->
</head>
<body>
    <h1>Gestion des Candidatures et des Offres d'emploi</h1>

    <!-- Form for adding a new candidature -->
    <form method="post">
        <input type="hidden" name="action" value="addCondida">
        <input type="text" name="nomc" placeholder="Nom">
        <input type="email" name="emailc" placeholder="Email">
        <textarea name="lettre" placeholder="Lettre"></textarea>
        <input type="file" name="cv" accept=".pdf,.doc,.docx">
        <button type="submit">Ajouter Candidature</button>
    </form>

    <!-- Display candidatures -->
    <h2>Liste des Candidatures</h2>
    <ul>
        <?php foreach ($candidatures as $candidature): ?>
            <li><?php echo $candidature['nomc']; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Display offres
