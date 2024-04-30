<?php
class client{
    private $id = null;
    private $nom = null;
    private $prenom = null;
    private $email = null;
    private $login = null;
    private $password = null;
    private $cv = null; // New attribute
    private $exp = null; // New attribute

    function __construct(string $nom, string $prenom, string $email, string $login, string $password, string $cv, int $exp){
        
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->login=$login;
        $this->password=$password;
        $this->cv = $cv;
        $this->exp = $exp;
    }
    
    function getId(): int{
        return $this->id;
    }
    function getNom(): string{
        return $this->nom;
    }
    function getPrenom(): string{
        return $this->prenom;
    }
    function getLogin(): string{
        return $this->login;
    }
    function getEmail(): string{
        return $this->email;
    }
    function getPassword(): string{
        return $this->password;
    }
    function getCv(): string{ // Getter for cv
        return $this->cv;
    }
    function getExp(): int{ // Getter for exp
        return $this->exp;
    }

    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    function setPrenom(string $prenom): void{
        $this->prenom = $prenom;
    }
    function setLogin(string $login): void{
        $this->login=$login;
    }
    function setEmail(string $email): void{
        $this->email=$email;
    }
    function setPassword(string $password): void{
        $this->password=$password;
    }
    function setCv(string $cv): void{ // Setter for cv
        $this->cv = $cv;
    }
    function setExp(int $exp): void{ // Setter for exp
        $this->exp = $exp;
    }
}
?>
