<?php

include 'config.php';
class Condida {

    // Method to delete a candidature by ID
    public function deleteCandida($idc) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('DELETE FROM `condida` WHERE `idc` = :idc');
            $req->execute(['idc' => $idc]);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to add a new candidature
    public function addCondida($condida) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('INSERT INTO `condida` (ido, nomc, emailc, lettre, cv) VALUES (:ido, :nomc, :emailc, :lettre, :cv)');
            $req->execute([
                'ido' => $condida->getido(),
                'nomc' => $condida->getnomc(),
                'emailc' => $condida->getemailc(),
                'lettre' => $condida->getlettre(),
                'cv' => $condida->getcv(),
            ]);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to update a candidature
    public function updateCondida($idc, $condida) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('UPDATE `condida` SET ido = :ido, nomc = :nomc, emailc = :emailc, lettre = :lettre, cv = :cv WHERE `idc` = :idc');
            $req->execute([
                'idc' => $idc,
                'ido' => $condida->getido(),
                'nomc' => $condida->getnomc(),
                'emailc' => $condida->getemailc(),
                'lettre' => $condida->getlettre(),
                'cv' => $condida->getcv(),
            ]);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to retrieve all candidatures
    public function listCondida() {
        $db = config::getConnexion();
        try {
            $list = $db->query('SELECT * FROM `condida`');
            return $list;
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to get a candidature by ID
    public function getidc($idc) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('SELECT * FROM `condia` WHERE `idc` = :idc');
            $req->execute(['idc' => $idc]);
            return $req->fetch();
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

}
?>
