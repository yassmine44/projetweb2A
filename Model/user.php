<?php
class user{
    private $id;
    private $nom;
    private $prenom;
    private $phone;
    private $role;
    private $password;
    private $date_de_naissance;
    private $email;
   
    
    
    public function __construct($id ,$nom, $prenom, $phone, $role, $password,$date_de_naissance,$email){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->phone = $phone;
        $this->role = $role;
        $this->password = $password;
        $this->date_de_naissance = $date_de_naissance;
        $this->email = $email;
        
       
    }

    public function getid(){
        return $this->id; 
    }
    public function getNom(){
        return $this->nom; 
    }
   
    public function getprenom(){
        return $this->prenom; 
    }
    public function getphone(){
        return $this->phone; 
    }
    public function getrole(){
        return $this->role; 
    }

    public function getpassword(){
        return $this-> password;
        }
    public function getdate_de_naissance(){
        return $this->date_de_naissance; 
    }
   
   
    public function getemail(){
        return $this->email; 
    }
   
   
    public function setid($id){
        $this->id = $id; 
    }
   

    public function setNom($nom){
        $this->nom = $nom; 
    }
    public function setprenom($prenom){
        $this->prenom = $prenom; 
    }
   
    public function setrole($role){
        $this->role = $role; 
    }
    public function setphone($phone){
        $this->phone = $phone; 
    }
    public function setpassword($password){
        $this->password = $password; 
    }
    public function setdate_de_naissance($date_de_naissance){
        $this->date_de_naissance = $date_de_naissance; 
    }
    public function setemail($email){
        $this->email = $email; 
    }


}

