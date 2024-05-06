<?php
require "C:/xampp/htdocs/gestionentretien/config.php";
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
        $sql="INSERT INTO entretien 
        VALUES (:IDE ,:nom, :email, :titreposte,:daterdv, :langue,:format ,:numtel)";

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
                'numtel' => $entretien->getNumtel(),
                ]);
        } catch (Exception $e) {
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
    $sql = "UPDATE entretien SET IDE = :IDE ,nom = :nom, email = :email, titreposte = :titreposte, daterdv = :daterdv, langue = :langue, format = :format, numtel = :numtel WHERE IDE = :IDE";
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

 // Méthode pour récupérer les événements depuis la base de données
 public function getEvents()
 {
     // Connexion à la base de données
     $db = config::getConnexion();

     // Requête pour récupérer les événements
     $sql = "SELECT nom, daterdv FROM entretien";
     $query = $db->query($sql);
     $events = $query->fetchAll(PDO::FETCH_ASSOC);

     // Retourner les événements
     return $events;
 }

 // Autres méthodes de la classe entretienC...
 public function getEventsFromDatabase()
    {
        $db = config::getConnexion();
        $sql = "SELECT nom, daterdv FROM entretien";
        $query = $db->query($sql);
        $events = $query->fetchAll(PDO::FETCH_ASSOC);

        // Convertir les événements au format compatible avec FullCalendar
        $formattedEvents = [];
        foreach ($events as $event) {
            // Convertir la date en format ISO 8601
            $start = date('Y-m-d\TH:i:s', strtotime($event['daterdv']));
            // Ajouter l'événement formaté au tableau
            $formattedEvents[] = [
                'title' => $event['nom'],
                'start' => $start,
            ];
        }

        // Retourner les événements formatés
        return $formattedEvents;
    }
}


