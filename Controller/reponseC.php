<?php


include_once 'config.php';
include '../model/reponse.php';
class reponseC
{

    public function afficher()
    {
        $sql = "SELECT * FROM reponse";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function supprimer($id)
    {
        $sql = "DELETE FROM reponse WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function ajouter($reponse)
    {
        $sql = "INSERT INTO reponse (date, description, id_reclamation)
        VALUES (:date,:description, :id_reclamation)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'date' => $reponse->getDate(),
                'description' => $reponse->getDescription(),
                'id_reclamation' => $reponse->getIDReclamation()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function modifier($reponse, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reponse SET 
                    date = :date, 
                    description = :description,
                    id_reclamation = :id_reclamation
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'date' => $reponse->getDate(),
                'description' => $reponse->getDescription(),
                'id_reclamation' => $reponse->getIDReclamation()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererReponse($id){
        $sql="SELECT * from reponse where id=$id";
        $conn = new config();
        $db=$conn->getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $reponse=$query->fetch();
            return $reponse;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function triReponse()
    {
        $sql = "SELECT * FROM reponse order by date";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function rechercheReponse($rech)
    {
        $sql = "SELECT * FROM reponse where reponse.date like '%$rech%' or reponse.description like '%$rech%'";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function getReponsesByEmail($email) {
        $dbHost = 'localhost';
        $dbName = 'projetweb2a';
        $dbUser = 'root';
        $dbPassword = '';
        try {
            $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT r.id, r.description, r.date, re.id AS id_reclamation, re.nom AS nom_reclamation, re.email AS email_reclamation
        FROM reponse r
        INNER JOIN reclamation re ON r.id_reclamation = re.id
        WHERE re.email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $reponses = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $reponses;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return array(); // Retourne un tableau vide en cas d'erreur
        }
    }
    
}
