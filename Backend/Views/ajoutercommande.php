<?php
    include_once '../Model/commande.php';
    include_once '../Controller/commandeC.php';

    

    $error = "";

    // create commande
    $commande = NULL;

    // create an instance of the controller
    $commandeC = new commandeC();
      if (
                //isset($_POST["idCom"]) &&
                isset($_POST["nom"]) &&
		        isset($_POST["telephone"]) && 
                isset($_POST["adresse"]) && 
                isset($_POST["prix"])
    ) {
        if (
                    //!empty($_POST['idCom']) &&
                    !empty($_POST['nom']) &&
			        !empty($_POST["telephone"]) && 
                    !empty($_POST["adresse"]) && 
                    !empty($_POST["prix"])
        ) {
            $commande = new commande(
                        //$_POST['idCom'],
                        $_POST['nom'],
				        $_POST['telephone'],
                        $_POST["adresse"],
                        $_POST['prix']
            );
            $commandeC->ajoutercommande($commande);
            header('Location:table-commande.php');
        }
        else
            $error = "Missing information";
    }

?>