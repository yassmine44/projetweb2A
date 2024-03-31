<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $server = "localhost";
    $login = "root";
    $dbName = "2A27";
    $pwd = "";
    try {
        $pdo = new PDO("mysql:root=$server;dbname=$dbName", $login, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // $pdo-> exec("CREATE DATABASE webProjectDB25"); // create new dataBase we have to delete dbname just keep the root

        echo 'connected successfully';
    } catch (PDOException $e) {
        echo 'echec de connexion:' . $e->getMessage();
    }
    ?>




    <!-- $fullName= "Foulen";
        $email="foulen";
        $query= "INSERT INTO users(fullName,email) VALUES ('emna rbii','rbii1111@gmail.com')";
        $pdo->exec($query); -->

</body>

</html>