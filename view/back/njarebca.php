<?php

include 'C:/xampp/htdocs/gestionentretien/Controller/entretienC.php';

$entretienC = new entretienC();
$entretien = $entretienC->listentretien();

$calendarEvents = [];

foreach ($entretien as $entretien) {
    $calendarEvents[] = array(
        'id' => $entretien['IDE'],
        'name' => $entretien['nom'],
        'date' => $entretien['daterdv'],
        'description' => $entretien['titreposte'],
        'type' => $entretien['langue']
    );
}
?>

<script>
$(document).ready(function() {
    $('#calendar').evoCalendar({
      theme:"Midnight Blue",
        calendarEvents: <?php echo json_encode($calendarEvents); ?>
    });
});
</script>
