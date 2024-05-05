<?php
class users {
    private int $id;
    private string $prenom;
    private string $nom;
    private int $age;
    private string $email;
    private string $mdp;
    private string $fonction;
    private string $etat;
    private string $token;

    public function __construct($prenom,$nom,$age,$email,$mdp,$fonction,$etat) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->fonction = $fonction;
        $this->etat = $etat;
    }

    public function getid(){
        return $this->id;
    }

    public function getprenom(){
        return $this->prenom;
    }

    public function getnom(){
        return $this->nom;
    }

    public function getage(){
        return $this->age;
    }

    public function getemail(){
        return $this->email;
    }

    public function getmdp(){
        return $this->mdp;
    }

    public function getfonction(){
        return $this->fonction;
    }

    public function getetat(){
        return $this->etat;
    }

    public function gettoken(){
        return $this->token;
    }

    public function setid($id){
        $this->id=$id;
    }

    public function setprenom($prenom){
        $this->prenom=$prenom;
    }

    public function setnom($nom){
        $this->nom=$nom;
    }

    public function setage($age){
        $this->age=$age;
    }

    public function setemail($email){
        $this->email=$email;
    }

    public function setmdp($mdp){
        $this->mdp=$mdp;
    }

    public function setfonction($fonction){
        $this->fonction=$fonction;
    }

    public function setetat($etat){
        $this->etat=$etat;
    }

    public function settoken($token){
        $this->token=$token;
    }
}
?>
