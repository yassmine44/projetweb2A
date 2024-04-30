<?PHP
	include "../config.php";
	require_once '../model/Affectation_event_to_client.php';

	class Affectation_event_to_clientC {
			function participer($offreFK, $clientFK) {
				$sql = "INSERT INTO affectationeventtoclient (OffreFK, ClientFK) VALUES (:offreFK, :clientFK)";
				$db = config::getConnexion();
				$req = $db->prepare($sql);
				$req->bindValue(':offreFK', $offreFK);
				$req->bindValue(':clientFK', $clientFK);
				try {
					$req->execute();
				} catch (Exception $e) {
					die('Erreur: '.$e->getMessage());
				}   
			}
		
			// Other functions...
		}
		

		function afficherparticipations($current_client){
			$CurrentUser=1; //baddalhaaaaaa kif tamel login : current user
			$sql="SELECT a.*,o.* FROM affectationeventtoclient a JOIN offre o ON o.IDoffre=a.offreFK WHERE a.ClientFK='".$current_client."'";
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