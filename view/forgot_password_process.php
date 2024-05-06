<?php
require_once '../config.php'; // Inclure votre fichier de configuration PDO

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
}
else {
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                     
    $mail->Host       = 'smtp.gmail.com';                
    $mail->SMTPAuth   = true;                               
    $mail->Username   = 'ghayakorbi7@gmail.com';               
    $mail->Password   = 'qdlh yatg lgjp bmtk';                           
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                

    $mail->setFrom('ghayakorbi7@gmail.com', 'Admin');
    $mail->addAddress($email);    

    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);

    $mail->isHTML(true);                                 
    $mail->Subject = 'confirm rendez-vous';
    $mail->Body    = 'To confirm click <a href="http://localhost/2A/projetWeb2/View/change_password.php?code='.$code.'">here </a>. </br>Reset your password in a day.';

    // Utiliser PDO pour les requêtes SQL
    $conn = new PDO('mysql:host=localhost;dbname=projetweb2a', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $verifyQuery = $conn->prepare("SELECT * FROM entretien WHERE email = :email");
    $verifyQuery->bindParam(':email', $email);
    $verifyQuery->execute();

    if($verifyQuery->rowCount()) {
        $codeQuery = $conn->prepare("UPDATE entretien SET code = :code WHERE email = :email");
        $codeQuery->bindParam(':code', $code);
        $codeQuery->bindParam(':email', $email);
        $codeQuery->execute();
            
        $mail->send();
        echo "<div style='color: black; text-align: center; margin-top: 20px; font-size: 24px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Message has been sent, check your email</div>";

    }

    $conn = null;

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
