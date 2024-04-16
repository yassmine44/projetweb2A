<?PHP
	include "../controller/eventC.php";
	session_start();
	$eventC=new eventC();
	
	if (isset($_POST["IDoffre"])){
		$eventC->supprimerevent($_POST["IDoffre"]);
		header('Location:afficherevents.php');
	}

?>