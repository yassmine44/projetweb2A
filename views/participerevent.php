<?PHP
	include "../controller/Affectation_event_to_clientC.php";

	$affectation_event_to_clientC=new Affectation_event_to_clientC();
	
	if (isset($_POST["EvenementFK"])){
		$affectation_event_to_clientC->participer($_POST["EvenementFK"],$_POST["id"]);
		header('Location:affichereventsFront.php');
	}

?>