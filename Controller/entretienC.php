<?php
include '../config.php';
//include '../Model/entretien.php';


class entretienC
{

    public function listentretien()
    {
        $sql = "SELECT * FROM entretien";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteentretien($IDE)
    {
        $sql = "DELETE FROM entretien WHERE IDE = :IDE";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':IDE', $IDE);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


      function ajouterEntretien($entretien){
        $sql="INSERT INTO entretien (IDE ,nom, email, numtel, titreposte, daterdv, langue,format) 
        VALUES (:IDE ,:nom, :email,:numtel, :titreposte,:daterdv, :langue,:format)";

        $db = config::getConnexion();
        try {
                $query = $db->prepare($sql);
                $query->execute([
                'IDE' => $entretien->getIDE(),
                'nom' => $entretien->getNom(),
                'email' => $entretien->getEmail(),
                'titreposte' => $entretien->getTitrePoste(),
                'daterdv' => $entretien->getDaterdv(),
                'langue' => $entretien->getLangue(),
                'format' => $entretien->getFormat(),
                    'numtel' => $entretien->getNumtel()
                ]);
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
}


    function showentretien($IDE)
    {
        $sql = "SELECT * from entretien where IDE = $IDE";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $entretien = $query->fetch();
            return $entretien;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateEntretien($entretien, $IDE)
{
    $sql = "UPDATE entretien SET nom = :nom, email = :email, titreposte = :titreposte, daterdv = :daterdv, langue = :langue, format = :format, numtel = :numtel WHERE IDE = :IDE";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'IDE' => $IDE,
            'nom' => $entretien->getNom(),
            'email' => $entretien->getEmail(),
            'titreposte' => $entretien->getTitrePoste(),
            'daterdv' => $entretien->getDaterdv(),
            'langue' => $entretien->getlangue(),
            'format' => $entretien->getFormat(),
            'numtel' => $entretien->getNumTel(),
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

}

