<?php

class reclamation
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $email = null;
    private ?int $phone = null;
    private ?string $sujet = null;
    private ?string $etat = null;
    private ?string $date = null;
    private ?string $contenu = null;


    public function __construct($nom, $email, $phone, $sujet, $etat, $date, $contenu)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->phone = $phone;
        $this->sujet = $sujet;
        $this->etat = $etat;
        $this->date = $date;
        $this->contenu = $contenu;
    }

    
    public function getId()
    {
        return $this->id;
    }

    
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    
    public function getDate()
    {
        return $this->date;
    }

    
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    public function getPhone()
    {
        return $this->phone;
    }

    
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }


    public function getContenu()
    {
        return $this->contenu;
    }

    
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }


    public function getEtat()
    {
        return $this->etat;
    }

    
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }    


    public function getSujet()
    {
        return $this->sujet;
    }

    
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }
    

    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
