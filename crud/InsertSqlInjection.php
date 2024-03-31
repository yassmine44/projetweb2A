<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  


    $serveur='localhost';
    $login='root';
    $pwdd="";

 

//***************************injection  1 */
    //exemple sql d'injection
   //mettre $fullName dans la variable fullName dans la requette
    $email= "ali@gmail.com','ali'),('alimohamed@gmail.com','alimed'),('kenza@gmail.com";
    $pwd="kenza";


    try{
        $conn=new PDO("mysql:host=$serveur;dbname=2A27",$login,$pwdd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query= "INSERT INTO user(email,pwd)
        VALUES ('$email','$pwd')";
        $conn->exec($query);
        echo 'insert done with success';
    } 
    catch(PDOException $e){
        echo 'echec de connexion:' .$e->getMessage();
    }
  ?>
 
    
</body>
</html>



<!-- //*******************************************pour éviter sql injection***********************************************

    /**Préparer l'instruction */
        $requette=$conn->prepare("INSERT INTO users(fullName,email) VALUES (:fullName,:email)");

        //**********************bind pour associer des valeurs spécifiques à chaque paramètre de la requête préparée*************
        $requette->bindParam(':fullName',$fullName);
        $requette->bindParam(':email',$email);

        $fullName="rbiiemna";
        $email="rbiiemna@gmail.com";
        $requette->execute(); -->