<?php
   include_once '../Model/Stock.php';
    include_once '../Controller/StockC.php';
    $error = "";
    $Stock = null;

    // create an instance of the controller
    $StockC = new StockC();
    if (
        
        isset($_POST["dispo"]) &&
		isset($_POST["nbrarticle"]) &&		
        isset($_POST["datearr"]) &&
        isset($_POST["produit"])
    ) {
        if (
             
            !empty($_POST["dispo"]) && 
			!empty($_POST['nbrarticle']) &&
            !empty($_POST["datearr"]) && 
			!empty($_POST["produit"])
        ) {
            $stock = new stock(
                
                $_POST['dispo'],
				$_POST['nbrarticle'],
                $_POST['datearr'],
                $_POST['produit']
            );
            $StockC->ajouterstock($stock);
           header('Location:table-stock.php');
        }
        else
            $error = "Missing information";
            echo $error;
    }
    var_dump($_POST);
    
?>
