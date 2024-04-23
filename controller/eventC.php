<?PHP
	include "../config.php";
	require_once '../model/event.php';

	class eventC {
		
		function addEvent($event)
		{			
		$dba=config::getConnexion();
			
		$sqlQuery = " INSERT INTO offre (titreoffre,datelimit,typecontrat,salaire,image,idfk) VALUES (:titreoffre,:datelimit,:typecontrat,:salaire,:image,:idfk)" ;		   
				try{
					$req=$dba->prepare($sqlQuery);
				   
					$req->bindValue(':titreoffre',$event->gettitreoffre());
					$req->bindValue(':datelimit',$event->getdatelimit());
					$req->bindValue(':typecontrat',  $event->gettypecontrat());
					$req->bindValue(':salaire',  $event->getsalaire());
					$req->bindValue(':image',  $event->getImage());
					$req->bindValue(':idfk',  $event->getidfk());

	
					$req->execute();
					}
	
				 catch (Exception $e){
				echo '\n Erreur: '.$e->getMessage();
		}
	}

		function ajouterevent($event){
			$sql="INSERT INTO offre (titreoffre,datelimit,typecontrat,salaire,image,idfk) 
			VALUES (:titreoffre,:datelimit,:typecontrat,:salaire,:image,:idfk)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'titreoffre' => $event->gettitreoffre(),
					'datelimit' => $event->getdatelimit(),
					'typecontrat' => $event->gettypecontrat(),
					'salaire' => $event->getsalaire(),
					'image' => $event->getimage() ,
					'idfk' => $event->getidfk() 

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherevents(){
			
			$sql="SELECT * FROM offre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}


		function affichereventsFront(){
			
			$sql="SELECT * FROM offre ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerevent($IDoffre){
			$sql="DELETE FROM offre WHERE IDoffre= :IDoffre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IDoffre',$IDoffre);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierevent($event, $IDoffre){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE offre SET 
						titreoffre  = :titreoffre ,
						datelimit = :datelimit,
						typecontrat = :typecontrat,
						salaire = :salaire,
						idfk= :idfk,
						image = :image
					WHERE IDoffre = :IDoffre'

				);
				$query->execute([
					'titreoffre' => $event->gettitreoffre (),
					'datelimit' => $event->getdatelimit(),
					'typecontrat' => $event->gettypecontrat(),
					'salaire' => $event->getsalaire(),
					'idfk' => $event->getidfk(),
					'image' => $event->getimage(),
					'IDoffre' => $IDoffre	
				]);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererevent($IDoffre){
			$sql="SELECT * from offre where IDoffre=$IDoffre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$evt=$query->fetch();
				return $evt;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererevent1($IDoffre){
			$sql="SELECT * from offre where IDoffre=$IDoffre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$evt = $query->fetch(PDO::FETCH_OBJ);
				return $evt;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>
ccc