<?php

class comment
{
    private ?int $idc = null;
    private ?string $nom = null;
    private ?string $email = null;
    private ?string $contenu = null;


    public function __construct($nom, $email, $contenu)
    {
        $this->nom = $nom;
        $this->email = $email;
    
        $this->contenu = $contenu;
    }

    
    public function getidc()
    {
        return $this->idc;
    }
    public function setidc($idc)
    {
        $this->idc = $idc;

        return $this;
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

    
    


    public function getContenu()
    {
        return $this->contenu;
    }

    
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

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
