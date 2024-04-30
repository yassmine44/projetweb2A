<?php
require_once '../model/eventl.php'; // Include the Event class file

$event = new Event();
$offerData = $event->getAllevents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="evo-calendar.min.css">
    <link rel="stylesheet" href="evo-calendar.midnight-bleu.min.css">
</head>
<body>
    <div class="hero"></div>
    <div id="calendar"></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="evo-calendar.min.js"></script>

    <script>
        $(document).ready(function() {
            var offerData = <?php echo json_encode($offerData); ?>;

            $('#calendar').evoCalendar({
                calendarEvents: offerData
            });
        });
    </script>

    <a href="sessions.php" class="return-button">Return</a>
</body>
</html>