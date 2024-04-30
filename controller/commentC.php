<?php
include_once 'config.php';
include '../model/comment.php';
class commentC
{
      public function afficher()
    {
        $sql = "SELECT * FROM comment";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    } 
    function ajouter($comment)
    {
        $sql = "INSERT INTO comment (nom, email ,contenu)
        VALUES (:nom,:email, :contenu)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $comment->getNom(),
                'email' => $comment->getEmail(),
                
                'contenu' => $comment->getContenu()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function recuperercomment($id){
        $sql="SELECT * from comment where id=$id";
        $conn = new config();
        $db=$conn->getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $comment=$query->fetch();
            return $comment;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function tricomment()
    {
        $sql = "SELECT * FROM comment order by nom";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recherchecomment($rech)
    {
        $sql = "SELECT * FROM comment where comment.nom like '%$rech%' or comment.email like '%$rech%'  or comment.contenu like '%$rech%'";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
 
   
    function modifier($comment, $id)
    {
        {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE comment SET 
                    nom = :nom, 
                    email = :email,
                    
                    contenu = :contenu
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'nom' => $comment->getNom(),
                'email' => $comment->getEmail(),

                'contenu' => $comment->getContenu()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function supprimer($id)
    {
        $sql = "DELETE FROM comment WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function count_comment(){

        $sql="SELECT count(id) FROM comment" ;
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
    function affichernotif1()
        {
            $sql="SELECT utilisateur.nom , utilisateur.prenom,restaurantt.nom,notificationn.id
            FROM notificationn INNER JOIN  utilisateur ON
            utilisateur.id = notificationn.idclient 
            INNER JOIN  restaurantt ON
            restaurantt.num = notificationn.num  " ;
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
}

?>
