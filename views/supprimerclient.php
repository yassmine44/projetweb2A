<?PHP
	include "../controller/clientC.php";
	session_start();
	$clientC=new clientC();
	
	if (isset($_POST["id"])){
		$clientC->supprimerclient($_POST["id"]);
		
		header('Location:afficherclients.php');
	}

?>