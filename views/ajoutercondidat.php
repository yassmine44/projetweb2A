<?php
include_once '../model/client.php';
include_once '../controller/clientC.php';

$error = "";

// create an instance of the controller
$clientC = new clientC();

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["cv"]) &&
    isset($_POST["exp"]) // Include the CV and Exp fields here
) {

    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["cv"]) && // Check if CV is not empty
        !empty($_POST["exp"]) // Check if Exp is not empty
    ) {
        $client = new client(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['password'],
            $_POST['cv'],
            $_POST['exp']
        );

        $clientC->ajouterclient($client);
        echo "<script>alert('A candidate added successfully'); window.location.href = 'affichereventsfront.php';</script>";
        exit; // Added to stop further execution
    } else {
        $error = "Missing information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler à une offre d'emploi.</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
<script>
    function verif() {
        let nom = document.getElementById("nom").value.trim();
        let prenom = document.getElementById("prenom").value.trim();
        let login = document.getElementById("login").value.trim();
        let password = document.getElementById("password").value.trim();
        let cv = document.getElementById("cv").value.trim();
        let exp = document.getElementById("exp").value.trim();

        // Regular expression for phone number (starts with +216 followed by 8 digits)
        let phoneRegex = /^\+216[0-9]{8}$/;

        // Regular expression for letters only
        let lettersRegex = /^[a-zA-Z\s]{15,}$/;

        // Check if nom is a valid phone number
        if (!phoneRegex.test(nom)) {
            alert("Veuillez saisir un numéro de téléphone valide (format: +216XXXXXXXX).");
            return false;
        }

        // Check if prenom contains only letters and has at least 15 characters
        if (!lettersRegex.test(prenom)) {
            alert("Le prénom doit contenir uniquement des lettres et avoir au moins 15 caractères.");
            return false;
        }

        // Check if login contains only letters and has at least 15 characters


        // Check if password is not empty
        if (password === "") {
            alert("Veuillez saisir votre objectif de carrière.");
            return false;
        }

        // Check if cv is not empty and is a PDF file
        let fileExtension = cv.split('.').pop().toLowerCase();
        if (fileExtension !== 'pdf') {
            alert("Veuillez sélectionner un fichier PDF pour votre CV.");
            return false;
        }

        // Check if exp is not empty and is a positive number less than or equal to 99
        if (exp === "" || isNaN(parseInt(exp)) || parseInt(exp) < 0 || parseInt(exp) > 99) {
            alert("Veuillez saisir un nombre positif et inférieur ou égal à 99 pour l'expérience.");
            return false;
        }

        // Add more validation rules as needed for other fields

        return true;
    }
</script>

</head>
<body>
    <div class="container">
        <h1>Postuler à cette offre d'emploi.</h1>
        <?php if (!empty($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <form class="form-sample" action="" method="POST" onsubmit="return verif()">
            <label for="nom">Contact Information (Phone Number):</label><br>
            <input type="tel" id="nom" name="nom"  placeholder="+216" ><br>
            <label for="prenom">Skills:</label><br>
            <input type="text" id="prenom" name="prenom" ><br>
            <label for="email">Education:</label><br>
            <input type="text" id="email" name="email" ><br>
            <label for="login">Country:</label><br>
            <select id="login" name="login" >
                <option value="">Select Country</option>
                <option value="USA">United States</option>
                <option value="CAN">Canada</option>
                <option value="UK">United Kingdom</option>
                <option value="TUN">Tunisia</option>
                <!-- Add more countries below -->
                <option value="AFG">Afghanistan</option>
                <option value="ALA">Åland Islands</option>
                <option value="ALB">Albania</option>
                <option value="DZA">Algeria</option>
                <option value="ASM">American Samoa</option>
                <!-- Add more countries as needed -->
            </select><br>
            <label for="password">Career Objective:</label><br>
            <input type="text" id="password" name="password"><br>
            <label for="cv">CV:</label><br>
            <input type="file" id="cv" name="cv" ><br>
            <label for="exp">Experience:</label><br>
            <input type="number" id="exp" name="exp" ><br>
            <input type="submit" value="Candidater">
        </form>
    </div>
</body>
</html>
