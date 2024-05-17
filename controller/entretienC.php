<?php
require "C:/xampp/htdocs/INTEGRATIONWEB/config.php";
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
        VALUES (:IDE ,:nom, :email, :titreposte,:daterdv, :langue,:format ,:numtel,'en attente')";

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

            // Envoyer l'e-mail de confirmation
            $this->sendConfirmationEmail($entretien->getEmail());

            echo 'Entretien ajouté avec succès!';

        } catch (Exception $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }

    function sendConfirmationEmail($email) {
        // Inclure la bibliothèque PHPMailer
        require 'C:/xampp/htdocs/gestionentretien/view/mail/PHPMailer/PHPMailerAutoload.php';

        // Créer une nouvelle instance de PHPMailer
        $mail = new PHPMailer;

        // Paramètres SMTP
        $mail->isSMTP();                                      // Utilisation de SMTP
        $mail->Host = 'smtp.gmail.com';                      // Serveur SMTP
        $mail->SMTPAuth = true;                               // Authentification SMTP activée
        $mail->Username = 'ghayakorbi7@gmail.com';         // Adresse e-mail SMTP
        $mail->Password = 'qdlh yatg lgjp bmtk';          // Mot de passe SMTP
        $mail->SMTPSecure = 'tls';                            // Chiffrement TLS, utilisez `ssl` si nécessaire
        $mail->Port = 587;                                    // Port SMTP

        // Destinataire
        $mail->setFrom('ghayakorbi7@gmail.com', 'ghaya');
        $mail->addAddress($email);                            // Adresse e-mail du destinataire

        // Contenu de l'e-mail
        $mail->isHTML(true);                                  // Définir le format de l'e-mail sur HTML
        $mail->Subject = 'Confirmation d\'entretien';
        $mail->Body    = 'Votre entretien a été enregistré avec succès.';
        $mail->Body   .= '<a href="http://localhost/gestionentretien/View/back/confirm.php?email=' . urlencode($email) . '">Confirmer</a> votre entretien.';

        // Envoyer l'e-mail
        if(!$mail->send()) {
            echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        } else {
            echo 'E-mail de confirmation envoyé avec succès!';
        }
    }
    // Dans votre classe entretienC

function updateStatusByEmail($email, $status)
{
    $sql = "UPDATE entretien SET statut = :status WHERE email = :email";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'email' => $email,
            'status' => $status,
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
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
    public function countUsersByState($state) {
        $sql = "SELECT COUNT(*) as total FROM entretien WHERE statut = :statut";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "statut" => $state
            ]);
    
            $result = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                return $result['total']; // Retourne le nombre total d'utilisateurs dans cet état
            } else {
                return 0; // Aucun utilisateur trouvé dans cet état
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    private $db;

    public function __construct() {
        $this->db = config::getConnexion();
    }


    public function getAllentretien() {
        $stmt = $this->db->query("SELECT * FROM entretien ORDER BY daterdv DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


