<?php

include 'config.php';

class offremploi {

    // Method to delete an offer of employment by ID
    public function deleteoffremploi($ido) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('DELETE FROM `offre demploi` WHERE `ido` = :ido');
            $req->execute(['ido' => $ido]);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to add a new offer of employment
    public function addoffremploi($offre) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('INSERT INTO `offre demploi` (ido, titre, datelimitc, typecontrat, salaire, idc) VALUES (NULL, :titre, :datelimitc, :typecontrat, :salaire, :idc)');
            $req->execute([
                'titre' => $offre->gettitre(),
                'datelimitc' => $offre->getdatelimitc(),
                'typecontrat' => $offre->gettypeContrat(),
                'salaire' => $offre->getsalaire(),
                'idc' => $offre->getidc()
            ]);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to update an offer of employment
    public function updateoffremploi($ido, $offre) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('UPDATE `offre demploi` SET titre = :titre, datelimitc = :datelimitc, typecontrat = :typecontrat, salaire = :salaire, idc = :idc WHERE `ido` = :ido');
            $req->execute([
                'ido' => $ido,
                'titre' => $offre->getTitre(),
                'datelimitc' => $offre->getDateLimiteCandidature(),
                'typecontrat' => $offre->getTypeContrat(),
                'salaire' => $offre->getSalaire(),
                'ide' => $offre->getUserID()
            ]);
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to retrieve all offers of employment
    public function listoffremploi() {
        $db = config::getConnexion();
        try {
            $list = $db->query('SELECT * FROM `offre demploi`');
            return $list;
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

    // Method to get an offer of employment by ID
    public function getoffremploi($ido) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('SELECT * FROM `offre demploi` WHERE `ido` = :ido');
            $req->execute(['ido' => $ido]);
            return $req->fetch();
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }

}
?>
