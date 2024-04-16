<?php
include_once 'config.php';
include '../model/reclamation.php';
class reclamationC
{
      public function afficher()
    {
        $sql = "SELECT * FROM reclamation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    } 
    function ajouter($reclamation)
    {
        $sql = "INSERT INTO reclamation (nom, email, phone, sujet, etat, date, contenu)
        VALUES (:nom,:email, :phone, :sujet, :etat, :date, :contenu)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $reclamation->getNom(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'sujet' => $reclamation->getSujet(),
                'etat' => $reclamation->getEtat(),
                'date' => $reclamation->getDate(),
                'contenu' => $reclamation->getContenu()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function recupererReclamation($id){
        $sql="SELECT * from reclamation where id=$id";
        $conn = new config();
        $db=$conn->getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $reclamation=$query->fetch();
            return $reclamation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function triReclamation()
    {
        $sql = "SELECT * FROM reclamation order by nom";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function rechercheReclamation($rech)
    {
        $sql = "SELECT * FROM reclamation where reclamation.nom like '%$rech%' or reclamation.email like '%$rech%' or reclamation.sujet like '%$rech%' or reclamation.etat like '%$rech%' or reclamation.contenu like '%$rech%'";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
 
   
    function modifier($reclamation, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reclamation SET 
                    nom = :nom, 
                    email = :email,
                    phone = :phone,
                    sujet = :sujet,
                    etat = :etat,
                    date = :date,
                    contenu = :contenu
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'nom' => $reclamation->getNom(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'sujet' => $reclamation->getSujet(),
                'etat' => $reclamation->getEtat(),
                'date' => $reclamation->getDate(),
                'contenu' => $reclamation->getContenu()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function supprimer($id)
    {
        $sql = "DELETE FROM reclamation WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function count_Reclamation(){

        $sql="SELECT count(id) FROM reclamation" ;
        $db = config::getConnexion();
        try{
            $query = $db->query($sql);
            $query->execute();
               $rec_number =$query->fetchColumn();
            return $rec_number;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function count_AvecReponse(){

        $sql="SELECT count(id) FROM reponse" ;
        $db = config::getConnexion();
        try{
            $query = $db->query($sql);
            $query->execute();
               $rep_number =$query->fetchColumn();
            return $rep_number;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

}


?>
