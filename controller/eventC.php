<?PHP
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../model/event.php');

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
    	
			function triByExp($direction){
				$sql = "SELECT * FROM offre ORDER BY IDoffre $direction";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}            
			}
		
			function recherche($titreoffre){
				$sql = "SELECT * 
						FROM offre
						WHERE titreoffre LIKE '%" . $titreoffre . "%'";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch (Exception $e){
					die('Erreur: ' . $e->getMessage());
				}            
			}
			function triByExpr($direction){
				$sql = "SELECT * FROM offre ORDER BY salaire $direction";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}            
			}
		
			function recherchepr($titreoffre){
				$sql = "SELECT DISTINCT * 
						FROM offre
						WHERE titreoffre LIKE '%" . $titreoffre . "%'";
				$db = config::getConnexion();
				try {
					$liste = $db->query($sql);
					return $liste;
				} catch (Exception $e) {
					die('Erreur: ' . $e->getMessage());
				}            
			}			

					function getExpiringOffers() {
    $currentDate = date('Y-m-d');
    
    $sql = "SELECT * FROM offre WHERE datelimit < :currentDate";
    $db = config::getConnexion();
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':currentDate', $currentDate);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
				
					function filterEvents($filterCriteria) {
						$sql = "SELECT * FROM offre WHERE 1";
					
						// Add conditions based on filter criteria
						if (!empty($filterCriteria['titreoffre'])) {
							$sql .= " AND titreoffre LIKE :titreoffre";
						}
					
						// Add similar conditions for other fields...
					
						// Prepare SQL statement
						$db = config::getConnexion();
						$stmt = $db->prepare($sql);
					
						// Bind parameter values
						if (!empty($filterCriteria['titreoffre'])) {
							$stmt->bindValue(':titreoffre', '%' . $filterCriteria['titreoffre'] . '%');
						}
					
						// Bind similar values for other fields...
					
						// Execute SQL query
						try {
							$stmt->execute();
							$filteredEvents = $stmt->fetchAll(PDO::FETCH_ASSOC);
							return $filteredEvents;
						} catch (Exception $e) {
							die('Erreur: ' . $e->getMessage());
						}
					}
					}
					public static function calculateAverageSalary()
					{
						$sql = "SELECT AVG(salaire) AS average_salary FROM offre";
						$db = config::getConnexion();
						try {
							$stmt = $db->query($sql);
							$result = $stmt->fetch(PDO::FETCH_ASSOC);
							return $result['average_salary'];
						} catch (Exception $e) {
							die('Erreur: '.$e->getMessage());
						}
					}
				
					public static function countEvents()
					{
						$sql = "SELECT COUNT(*) AS event_count FROM offre";
						$db = config::getConnexion();
						try {
							$stmt = $db->query($sql);
							$result = $stmt->fetch(PDO::FETCH_ASSOC);
							return $result['event_count'];
						} catch (Exception $e) {
							die('Erreur: '.$e->getMessage());
						}
					}
				
					public static function getMaxSalary()
					{
						$sql = "SELECT MAX(salaire) AS max_salary FROM offre";
						$db = config::getConnexion();
						try {
							$stmt = $db->query($sql);
							$result = $stmt->fetch(PDO::FETCH_ASSOC);
							return $result['max_salary'];
						} catch (Exception $e) {
							die('Erreur: '.$e->getMessage());
						}
					}
			
			
			
		
		
	}

		
		
	
	

?>
