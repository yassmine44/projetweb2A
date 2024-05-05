<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/../vendor/autoload.php';
include "C:/xampp/htdocs/Test/us/config.php";
include "C:/xampp/htdocs/Test/us/Model/users.php";

class user {

    public function isAdmin($email) {
        // Code pour interroger votre base de données
        // Supposons que vous avez une table "utilisateurs" avec une colonne "fonction" où 'admin' représente un administrateur et 'user' représente un utilisateur régulier

        // Exemple avec PDO
        $sql = "SELECT fonction FROM utilisateurs WHERE email = :email";
        $db = config::getConnexion();
        $stmt = $db->prepare($sql);
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Si l'utilisateur existe et est un administrateur, retourne vrai, sinon retourne faux
        if ($row && $row['fonction'] == 'admin') {
            return true;
        } else {
            return false;
        }
    }
    
    public function addUser($users){
        $sql = "INSERT INTO user(id,prenom, nom, age, email, mdp, fonction, etat) VALUES (null,:p, :n, :a, :e, :m,:f,:g)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                "p" => $users->getprenom(),
                "n" => $users->getnom(),
                "a" => $users->getage(),
                "e" => $users->getemail(),
                "m" => $users->getmdp(),
                "f" => $users->getfonction(),
                "g" => $users->getetat()
            ]);

            // Check if the query was successful
            if ($query) {
                echo "User added successfully!";
                return 1;
            } else {
                echo "Error: Failed to add user.";
                return 0;
            }
        }
        catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    public function login($email, $mdp) {
        $sql = "SELECT fonction, etat FROM user WHERE email = :e AND mdp = :m";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "e" => $email,
                "m" => $mdp
            ]);
    
            $result = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                // Vérifier l'état de l'utilisateur
                switch ($result['etat']) {
                    case 'actif':
                        // L'utilisateur est actif, vérifiez le type d'utilisateur et redirigez en conséquence
                        switch ($result['fonction']) {
                            case 'user':
                                return 1;                                
                            case 'admin':
                                return 2;
                                
                            default:
                                break;
                        }
                        break;
                    case 'ban':
                        return 6; // L'utilisateur est banni
                        
                    default:
                        break;
                }
            } else {
                return 0; // Email ou mot de passe incorrect
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }    

    public function nomuser($email) {
        $sql = "SELECT nom FROM user WHERE email = :e";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "e" => $email,
            ]);
    
            $result = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                return $result;
            } else {
                return 0; // Email ou mot de passe incorrect
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function iduser($email) {
        $sql = "SELECT id FROM user WHERE email = :e";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "e" => $email,
            ]);
    
            $result = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                return $result;
            } else {
                return 0; // Email ou mot de passe incorrect
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function listeruser()
    {      
        $sql="SELECT * FROM user";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
            
        } catch(Exception $e){
            die('error:'.$e->getMessage());
        }
    }

    function supprimeruser($id)
    {  
        $sql = "DELETE FROM user WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
            echo "Supprimees avec succees ! ";

        } 
        catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function updateusera($id, $prenom, $nom, $age, $email, $mdp, $fonction, $etat){
        $sql = "UPDATE user SET prenom=:p, nom=:n, age=:a,email=:e, mdp=:m,fonction=:f,etat=:et WHERE id=:id";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                "p" => $prenom,
                "n" => $nom,
                "a" => $age,
                "e" => $email,
                "m" => $mdp,
                "f" => $fonction,
                "et" => $etat,
                "id" => $id
            ]);
    
            // Vérifiez si la requête a réussi
            if ($query) {
                echo "User updated successfully!";
                return 1;
            } else {
                echo "Error: Failed to update the user.";
                return 0;
            }
        }
        catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM user WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "id" => $id
            ]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result; // Retourne les données de l'utilisateur sous forme de tableau associatif
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function generateToken() {
        return bin2hex(random_bytes(32)); // Génère un token hexadécimal de 32 octets
    }

    function sendPasswordResetEmail($email, $token) {
        $mail = new PHPMailer(true);
    
        try {
            // Paramètres du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'azizdouagi94@gmail.com'; // Votre adresse e-mail Gmail
            $mail->Password = 'jbjt uypd eqac sjzu'; // Votre mot de passe Gmail ou mot de passe d'application
            $mail->SMTPSecure = 'tls'; // Utilisez TLS pour une connexion sécurisée
            $mail->Port = 587; // Port SMTP pour TLS
    
            // Destinataire
            $mail->setFrom('azizdouagi94@gmail.com', 'ADMIN');
            $mail->addAddress($email);
    
            // Contenu de l'e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Modification du mot de passe';
            $mail->Body    = "Bonjour,<br><br>Cliquez sur le lien suivant pour réinitialiser votre mot de passe : <a href='http://localhost/Test/us/View/mdpreset.php?token=$token'>Réinitialiser le mot de passe</a>.";
    
            $mail->send();
            echo 'L\'e-mail de réinitialisation du mot de passe a été envoyé avec succès.';
        } catch (Exception $e) {
            echo "Erreur lors de l'envoi de l'e-mail de réinitialisation du mot de passe : {$mail->ErrorInfo}";
        }
    }

    public function updateTokenByEmail($email, $newToken) {
        $sql = "UPDATE user SET token=:token WHERE email=:email";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "token" => $newToken,
                "email" => $email
            ]);
            
            // Vérifiez si la requête a réussi
            if ($query) {
                echo "Token updated successfully!";
                return 1;
            } else {
                echo "Error: Failed to update the token.";
                return 0;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function getUserIdByToken($token) {
        $sql = "SELECT id FROM user WHERE token = :token";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "token" => $token
            ]);
    
            $result = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                return $result['id']; // Retourne l'ID de l'utilisateur
            } else {
                return 0; // Aucun utilisateur trouvé avec ce token
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function updatePasswordById($id, $newPassword) {
        $sql = "UPDATE user SET mdp=:mdp WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "mdp" => $newPassword,
                "id" => $id
            ]);
    
            // Vérifiez si la requête a réussi
            if ($query) {
                echo "Password updated successfully!";
                return 1;
            } else {
                echo "Error: Failed to update the password.";
                return 0;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
    public function deleteTokenById($id) {
        $sql = "UPDATE user SET token = NULL WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "id" => $id
            ]);
    
            // Vérifiez si la requête a réussi
            if ($query) {
                echo "Token deleted successfully!";
                return true;
            } else {
                echo "Error: Failed to delete token.";
                return false;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function searchUsers($keyword) {
        $sql = "SELECT * FROM user WHERE nom LIKE :keyword OR prenom LIKE :keyword OR email LIKE :keyword";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "keyword" => "%$keyword%"
            ]);
    
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function countUsersByState($state) {
        $sql = "SELECT COUNT(*) as total FROM user WHERE etat = :etat";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                "etat" => $state
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
    


    



}
?>
