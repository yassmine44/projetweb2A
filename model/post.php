<?php

class post
{
    private ?int $id = null;
    private ?string $date = null;
    private ?string $nom = null;
   // private ?int $id_comment = null;


    public function __construct($date, $nom)
    {
        $this->date = $date;
        $this->nom = $nom;
        //$this->id_comment = $id_comment;
    }

    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    public function getnom()
    {
        return $this->nom;
    }

    
    public function setnom($nom)
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

}
