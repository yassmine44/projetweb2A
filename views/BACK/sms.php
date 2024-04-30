<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Your Account SID and Auth Token from console.twilio.com
$sid = "ACc94836fcd2dd921f612d4b62caef40e2";
$token = "d10920d142a5a74be40357323793f01a";
$client = new Twilio\Rest\Client($sid, $token);

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sunandfun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get current date
$currentDate = date("Y-m-d");

// Calculate date 7 days from now
$futureDate = date("Y-m-d", strtotime($currentDate . " +7 days"));

// Query to select offers that will expire in 7 days
$sql = "SELECT * FROM offre WHERE datelimit BETWEEN '$currentDate' AND '$futureDate'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Send SMS for each offer expiring in 7 days
        $client->messages->create(
            // The number you'd like to send the message to
            '+21655660742',
            [
                // A Twilio phone number you purchased at https://console.twilio.com
                'from' => '+14094403139',
                // The body of the text message you'd like to send
                'body' => "The offer '{$row['titreoffre']}' will expire on {$row['datelimit']}."
            ]
        );
    }
    // Redirect back to afficherof.php after sending SMS
    header("Location: afficherof.php");
    exit(); // Ensure that script execution stops after redirection
} else {
    echo "0 results";
}
$conn->close();
?>
