<?php
include_once 'config.php';
include '../model/message.php';
include '../controller/messageC.php';
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
    
    
   
    supprimer($_GET["id"]);
    header('Location:Affichermessageback.php');
    
    
    ?>
    ?>