<?php

class comment
{
    private ?int $idc = null;
    private ?string $nom = null;
    private ?string $email = null;
    private ?string $contenu = null;
    private ?int $id_post= null;


    public function __construct($nom, $email, $contenu)//$id_post)
    {
        $this->nom = $nom;
        $this->email = $email;
       // $this->id_post = $id_post;
    
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
    
    public function getid_post()
    {
        return $this->id_post;
    }
    public function setid_post($id_post)
    {
        $this->id_post = $id_post;

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
