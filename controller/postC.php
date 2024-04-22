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
    function supprimer($id)
    {
        $sql = "DELETE FROM post WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function ajouter($post)
    {
        $sql = "INSERT INTO post (date, description)
        VALUES (:date,:description)";
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
    function modifier($post, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE post SET 
                    date = :date, 
                    description = :description
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'date' => $post->getDate(),
                'description' => $post->getDescription()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererpost($id){
        $sql="SELECT * from post where id=$id";
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
