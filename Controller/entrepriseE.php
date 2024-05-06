<?php
//require "../config.php";
require "C:/xampp/htdocs/gestionentretien/config.php";


class entrepriseE
{

    public function listentreprise()
    {
        $sql = "SELECT * FROM entreprise";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    

    function deleteentreprise($identreprise)
    {
        $sql = "DELETE FROM entreprise WHERE identreprise = :identreprise";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':identreprise', $identreprise);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addentreprise($entreprise)
    {
        $sql = "INSERT INTO entreprise  
        VALUES (:identreprise,:nom, :domaine)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'identreprise' => $entreprise->getidentreprise(),
                'nom' => $entreprise->getnom(),
                'domaine' => $entreprise->getdomaine(),
            
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showentreprise($identreprise)
    {
        $sql = "SELECT * from entreprise where identreprise = $identreprise";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $entreprise = $query->fetch();
            return $entreprise;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateentreprise($entreprise, $identreprise)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE entreprise SET 
                    identreprise = :identreprise,
                    nom = :nom, 
                    domaine = :domaine
                WHERE identreprise= :identreprise'
            );
            
            $query->execute([
                'identreprise' => $identreprise,
                'nom' => $entreprise->getNom(),
                'domaine' => $entreprise->getdomaine(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
