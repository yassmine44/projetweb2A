<?php
include_once 'config.php';
include '../model/post.php';
class postC
{

    public function afficher()
    {
        $sql = "SELECT * FROM post";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function supprimer($id_post)
    {
        $sql = "DELETE FROM post WHERE id_post = :id_post";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_post', $id_post);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function ajouter($post,$id_post)
    {
        $sql = "INSERT INTO post (date, description)
        VALUES (:date,:description)  WHERE id_post = :id_post";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'date' => $post->getDate(),
                'description' => $post->getDescription(),
             
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function modifier($post, $id_post)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE post SET 
                    date = :date, 
                    description = :description,
                 
                WHERE id_post= :id_post'
            );
            $query->execute([
                'id_post' => $id_post,
                'date' => $post->getDate(),
                'description' => $post->getDescription(),
               
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererpost($id_post){
        $sql="SELECT * from post where id_post=$id_post";
        $conn = new config();
        $db=$conn->getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $post=$query->fetch();
            return $post;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function tripost()
    {
        $sql = "SELECT * FROM post order by date";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recherchepost($rech)
    {
        $sql = "SELECT * FROM post where post.date like '%$rech%' or post.description like '%$rech%'";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
