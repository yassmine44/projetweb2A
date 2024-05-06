<?php
require "C:/xampp/htdocs/gestionentretien/config.php";
//include '../Model/user.php';


class userU
{

    public function listuser()
    {
        $sql = "SELECT * FROM user";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteuser($id)
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


      function ajouteruser($user){
        $sql="INSERT INTO user 
        VALUES (:id ,:nom, :prenom,:phone,:role,:password,:date_de_naissance, :email)";

        $db = config::getConnexion();
        try {
                $query = $db->prepare($sql);
                $query->execute([
                'id' => $user->getid(),
                'nom' => $user->getNom(),
                'prenom' => $user->getprenom(),
                'phone' => $user->getphone(),
                'role' => $user->getrole(),
                'password' => $user->getpassword(),
                'date_de_naissance' => $user->getdate_de_naissance(),
                'email' => $user->getemail(),
                ]);
        } catch (Exception $e) {
            echo "Erreur: " . $e->getMessage();
        }
}


    function showuser($id)
    {
        $sql = "SELECT * from user where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateuser($user, $id)
{
    $sql = "UPDATE user SET id = :id ,nom = :nom, prenom = :prenom, phone = :phone, role = :role, password = :password, date_de_naissance = :date_de_naissance, email = :email WHERE id = :id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'id' => $id,
            'nom' => $user->getNom(),
            'prenom' => $user->getprenom(),
            'phone' => $user->getphone(),
            'role' => $user->getrole(),
            'password' => $user->getpassword(),
            'date_de_naissance' => $user->getdate_de_naissance(),
            'email' => $user->getemail(),
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

}

