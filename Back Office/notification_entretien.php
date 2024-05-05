<?php
// Inclure le fichier de configuration et la classe entretienC
require "C:/xampp/htdocs/gestionentretien/Controller/entretienC.php";

// Créer une instance de la classe entretienC
$entretienManager = new entretienC();

// Récupérer les entretiens à venir depuis la base de données
$entretiens = $entretienManager->getEvents();

// Date et heure actuelles
$currentDateTime = date("Y-m-d H:i:s");

// Parcourir les entretiens
foreach ($entretiens as $entretien) {
    $nom = $entretien['nom'];
    $dateRdv = $entretien['daterdv'];

    // Vérifier si la date de l'entretien est proche
    if (strtotime($dateRdv) <= strtotime($currentDateTime) + (24 * 3600)) { // 24 heures avant l'entretien
        // Envoyer la notification
        // Vous pouvez envoyer un e-mail, un SMS, ou une notification push en fonction de vos besoins
        // Par exemple, pour l'envoi d'un e-mail
        $subject = "Rappel : Entretien le $dateRdv";
        $message = "Bonjour $nom,\n\nCeci est un rappel pour votre entretien le $dateRdv.\n\nCordialement, \nVotre entreprise";
        
        // Envoyer l'e-mail ou toute autre action de notification ici
        // Par exemple, pour envoyer un e-mail
        // mail($entretien['email'], $subject, $message);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notification</title>
<style>
    .notification {
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        color: #333;
        padding: 15px;
        margin-bottom: 10px;
    }
</style>
</head>
<body>

<div class="notification">
    <h2>Rappel : Entretien le <?php echo $dateRdv; ?></h2>
    <p>Bonjour <?php echo $nom; ?>,</p>
    <p>Ceci est un rappel pour votre entretien le <?php echo $dateRdv; ?>.</p>
    <p>Cordialement,</p>
    <p>Votre entreprise</p>
</div>

</body>
</html>

<?php
    }
}
?>
