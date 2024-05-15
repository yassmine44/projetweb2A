<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the file containing your function
require_once '../../controller/clientC.php';

try {
    // Call the function to get the client count by contract type
    $clientStats = clientC::getClientCountByContractType();
} catch (Exception $e) {
    // Handle any exceptions that might occur
    // For example, you could log the error or display a user-friendly message
    echo 'Error: ' . $e->getMessage();
    // Stop further execution to prevent displaying incomplete or incorrect data
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Statistics</title>
</head>
<body>
    <h1>Client Statistics by Contract Type</h1>
    <table>
        <thead>
            <tr>
                <th>Contract Type</th>
                <th>Client Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientStats as $row): ?>
            <tr>
                <td><?php echo $row['typecontrat']; ?></td>
                <td><?php echo $row['client_count']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
