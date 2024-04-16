<?PHP
	include '../../config.php';
	include_once '../Model/Stock.php';

	class StockC {
		
		function ajouterstock($Stock){
			$db = config::getConnexion();
			
			$sql="INSERT INTO Stock (dispo, nbrarticle, datearr,produit) 
			VALUES (:dispo,:nbrarticle,:datearr,:produit)";
			
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					'dispo' => $Stock->getdispo(),
					'nbrarticle' => $Stock->getnbrarticle(),
					'datearr' => $Stock->getdatearr(),
					'produit' => $Stock->getproduit(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function afficherstocktri1(){
			
			$sql="SELECT * FROM stock ORDER BY produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		
		function afficherStock(){
			
			$sql="SELECT * FROM Stock";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimerStock($produit){
			$sql="DELETE FROM Stock WHERE produit= :produit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':produit',$produit);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierStock($Stock,$produit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Stock SET 
						dispo = :dispo, 
						nbrarticle = :nbrarticle,
						datearr = :datearr,
						
					WHERE produit = :produit'
				);
				$query->execute([
					'dispo' => $Stock->getdispo(),
					'nbrarticle' => $Stock->getnbrarticle(),
					'datearr' => $Stock->getdatearr(),
					
					'produit' => $produit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>