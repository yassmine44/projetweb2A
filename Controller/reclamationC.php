<?php
include_once '../config.php';
include '../model/reclamation.php';
class reclamationC
{

    function ajouter($reclamation)
    {
        $sql = "INSERT INTO reclamation (nom, email, phone, sujet, etat, date, contenu)
        VALUES (:nom,:email, :phone, :sujet, :etat, :date, :contenu)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $reclamation->getNom(),
                'email' => $reclamation->getEmail(),
                'phone' => $reclamation->getPhone(),
                'sujet' => $reclamation->getSujet(),
                'etat' => $reclamation->getEtat(),
                'date' => $reclamation->getDate(),
                'contenu' => $reclamation->getContenu()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}


?>
