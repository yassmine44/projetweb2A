<?PHP
	include "../config.php";
	require_once '../model/Affectation_event_to_client.php';

	class Affectation_event_to_clientC {

		#ekteb hna
		function participer($affectation_event_to_client,$current_client){
			$sql="INSERT INTO affectationeventtoclient (EvenementFK,ClientFK) 
			VALUES (:EvenementFK,:clientFK)"; //baddalhaaaaaa kif tamel login : current user
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':EvenementFK',$affectation_event_to_client);
			$req->bindValue(':clientFK',$current_client);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function afficherparticipations($current_client){
			$CurrentUser=1; //baddalhaaaaaa kif tamel login : current user
			$sql="SELECT a.*,e.* FROM affectationeventtoclient a JOIN evenement e ON e.IDEvenement=a.EvenementFK WHERE a.ClientFK='".$current_client."'";
			$db = config::getConnexion();

			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}



    }
    ?>