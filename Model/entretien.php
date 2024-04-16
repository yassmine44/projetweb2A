<?php
class entretien{
    private $IDE;
    private $nom;
    private $email;
    private $titreposte;
    private $daterdv;
    private $langue;
    private $format;
    private $numtel;
   
    
    
    public function __construct($IDE ,$nom, $email, $titreposte, $daterdv, $langue,$format,$numtel){
        $this->IDE = $IDE;
        $this->nom = $nom;
        $this->email = $email;
        $this->titreposte = $titreposte;
        $this->daterdv = $daterdv;
        $this->langue = $langue;
        $this->format = $format;
        $this->numtel = $numtel;
        
       
    }

    public function getIde(){
        return $this->IDE; 
    }
    public function getNom(){
        return $this->nom; 
    }
   
    public function getEmail(){
        return $this->email; 
    }
    public function getTitrePoste(){
        return $this->titreposte; 
    }
    public function getDaterdv(){
        return $this->daterdv; 
    }

    public function getlangue(){
        return $this-> langue;
        }
    public function getFormat(){
        return $this->format; 
    }
   
   
    public function getNumTel(){
        return $this->numtel; 
    }
   
   
    public function setIde($IDE){
        $this->IDE = $IDE; 
    }
   

    public function setNom($nom){
        $this->nom = $nom; 
    }
    public function setEmail($email){
        $this->email = $email; 
    }
   
    public function setDaterdv($daterdv){
        $this->daterdv = $daterdv; 
    }
    public function setTitrePoste($titreposte){
        $this->titreposte = $titreposte; 
    }
    public function setlangue($langue){
        $this->langue = $langue; 
    }
    public function setFormat($format){
        $this->format = $format; 
    }
    public function setNumTel($numtel){
        $this->numtel = $numtel; 
    }


}

