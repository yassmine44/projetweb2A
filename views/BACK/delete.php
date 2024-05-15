<?php
include_once 'config.php';
include '../model/comment.php';
include '../controller/commentC.php';
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
    
    
   
    supprimer($_GET["idc"]);
    header('Location:Affichercommentback.php');
    
    
    ?>
    ?>