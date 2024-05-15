<?php

class post
{
    private ?int $id_post = null;
    private ?string $titre = null;
    private ?string $sujet = null;
    private ?string $date = null;
    private ?string $description = null;

    //private ?string $img = null;
   // private ?int $id_post_comment = null;


    public function __construct($titre, $sujet,$date, $description)
    {
        $this->titre = $titre;
        $this->sujet = $sujet;
        $this->date = $date;
        $this->description = $description;
       
        //$this->id_post= $id_post;
    }

    public function gettitre()
    {
        return $this->titre;
    }
    public function settitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getsujet()
    {
        return $this->sujet;
    }
    public function setsujet($sujet)
    {
        $this->sujet = $sujet;

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

    
    public function getDescription()
    {
        return $this->description;
    }

    
    public function setDescription($description)
    {
        $this->description = $description;

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

}
