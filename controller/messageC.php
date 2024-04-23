<?php
include_once 'config.php';
include '../model/message.php';
class messageC
{
      public function afficher()
    {
        $sql = "SELECT * FROM message";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    } 
    function ajouter($message)
    {
        $sql = "INSERT INTO message (nom, email ,contenu)
        VALUES (:nom,:email, :contenu)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $message->getNom(),
                'email' => $message->getEmail(),
                
                'contenu' => $message->getContenu()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function recuperermessage($id){
        $sql="SELECT * from message where id=$id";
        $conn = new config();
        $db=$conn->getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $message=$query->fetch();
            return $message;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function trimessage()
    {
        $sql = "SELECT * FROM message order by nom";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recherchemessage($rech)
    {
        $sql = "SELECT * FROM message where message.nom like '%$rech%' or message.email like '%$rech%'  or message.contenu like '%$rech%'";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
 
   
    function modifier($message, $id)
    {
        {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE message SET 
                    nom = :nom, 
                    email = :email,
                    
                    contenu = :contenu
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'nom' => $message->getNom(),
                'email' => $message->getEmail(),

                'contenu' => $message->getContenu()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function supprimer($id)
    {
        $sql = "DELETE FROM message WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function count_message(){

        $sql="SELECT count(id) FROM message" ;
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
}
?>