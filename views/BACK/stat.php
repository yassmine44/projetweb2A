<?php
require_once('../../controller/eventC.php');

// Assuming you have included your controller file or classes here

// Fetch data from controller functions
$averageSalary = eventC::calculateAverageSalary();
$eventCount = eventC::countEvents();
$maxSalary = eventC::getMaxSalary();

// Create data points array
$dataPoints = array(
    array("y" => $averageSalary, "label" => "Average Salary"),
    array("y" => $eventCount, "label" => "Event Count"),
    array("y" => $maxSalary, "label" => "Max Salary")
);

?>

<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Statistics"
                },
                axisY: {
                    title: "Values"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.##",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
