<?php
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/../model/client.php');
	
	class clientC {
		
		function ajouterclient($client){
			$sql="INSERT INTO client (nom, prenom, email, login, password, cv,exp) 
			VALUES (:nom,:prenom,:email, :login, :password, :cv, :exp)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $client->getNom(),
					'prenom' => $client->getPrenom(),
					'email' => $client->getEmail(),
					'login' => $client->getLogin(),
					'password' => $client->getPassword(),
					'cv' => $client->getCv(),
					'exp' => $client->getExp()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherclients(){
			
			$sql="SELECT * FROM client";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerclient($id){
			$sql="DELETE FROM client WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierclient($client, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						login = :login,
						password = :password,
						cv = :cv,
						exp = :exp
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $client->getNom(),
					'prenom' => $client->getPrenom(),
					'email' => $client->getEmail(),
					'login' => $client->getLogin(),
					'password' => $client->getPassword(),
					'cv' => $client->getCv(),
					'exp' => $client->getExp(),
					'id' => $id
				]);
			
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererclient($id){
			$sql="SELECT * from client where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererclient1($id){
			$sql="SELECT * from client where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function connexionUser($email,$password)
		{
			$db = config::getConnexion();
			$sql = "SELECT * FROM client WHERE email='" . $email . "'and password= '". $password." ' " ;
			try
			{
				$query=$db->prepare($sql);
				$query->execute();
				$count=$query->rowCount();
				$result = $query->fetch(PDO::FETCH_OBJ);
				if($count==0)
				{
					$message="pseudo ou le mot de passe est incorrect";
				}
				else
				{
					$x=$query->fetch();
					$message=$x['email'];
					$_SESSION['nom'] = $result->nom ;
					$_SESSION['id'] = $result->id ;
					$_SESSION['prenom']=$result->prenom ;
					$_SESSION['email']=$result->email ;
					echo "$message";

				}
				

			}
			catch (Exception $e)
				{
					$message= " ".$e->getMessage();
				}

			return $message;
		}
		
			function triByExp($direction){
				$sql = "SELECT id, nom, prenom, email, login, password, cv, exp
						FROM client
						ORDER BY exp $direction";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}            
			}
		
		
		

		function recherche($login){
			$sql = "SELECT id, nom, prenom, email, login, password, cv, exp
					FROM client
					WHERE login LIKE '%" . $login . "%'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: ' . $e->getMessage());
			}            
		}
		// Inside clientC class
		public function ajouterclientWithOffer($client, $selected_offer_id, $pdo) {
			// Insert client information into the client table
			$query = "INSERT INTO client (nom, prenom, email, login, password, cv, exp) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $pdo->prepare($query);
			$stmt->execute([$client->getNom(), $client->getPrenom(), $client->getEmail(), $client->getLogin(), $client->getPassword(), $client->getCv(), $client->getExp()]);
		
			// Retrieve the ID of the inserted client
			$client_id = $pdo->lastInsertId();
		
			// Insert the client ID and the selected offer ID into the affectationeventtoclient table
			$query = "INSERT INTO affectationeventtoclient (OffreFK, ClientFK) VALUES (?, ?)";
			$stmt = $pdo->prepare($query);
			$stmt->execute([$selected_offer_id, $client_id]);
		}
		
		
		public function getAllParticipants($pdo) {
			// Query to fetch all participants with their IDs and all data
			$query = "SELECT c.*, a.OffreFK, a.ClientFK FROM client c INNER JOIN affectationeventtoclient a ON c.id = a.ClientFK";
			$stmt = $pdo->prepare($query);
			$stmt->execute();
			
			// Fetch all rows
			$participants = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $participants;
		}
		 public static function getClientCountByContractType() {
        $sql = "SELECT o.typecontrat, COUNT(*) AS client_count
                FROM client c
                INNER JOIN affectationeventtoclient a ON c.id = a.ClientFK
                INNER JOIN offre o ON a.OffreFK = o.IDoffre
                GROUP BY o.typecontrat";
        
        // Assuming config class with getConnexion method to get database connection
        $db = config::getConnexion();
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
?>
