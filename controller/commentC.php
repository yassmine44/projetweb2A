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
        $sql = "INSERT INTO comment (nom, email ,contenu,id_post)
        VALUES (:nom,:email,:contenu,:id_post)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $comment->getNom(),
                'email' => $comment->getEmail(),
                'contenu' => $comment->getContenu(),
                'id_post' => $comment->getid_post()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function recuperercomment($idc){
        $sql="SELECT * from comment where idc=$idc";
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
 
   
    function modifier($comment, $idc)
    {
        {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE comment SET 
                    nom = :nom, 
                    email = :email,
                    contenu = :contenu
                    
                   
                WHERE idc= :idc'
            );
            $query->execute([
                'idc' => $idc,
                'nom' => $comment->getNom(),
                'email' => $comment->getEmail(),
                'contenu' => $comment->getContenu()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function supprimer($idc)
    {
        $sql = "DELETE FROM comment WHERE idc = :idc";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idc', $idc);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function count_comment(){

        $sql="SELECT count(idc) FROM comment" ;
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

        $sql="SELECT count(idc) FROM reponse" ;
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
            $sql="SELECT utilisateur.nom , utilisateur.prenom,restaurantt.nom,notificationn.idc
            FROM notificationn INNER JOIN  utilisateur ON
            utilisateur.idc = notificationn.idcclient 
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
