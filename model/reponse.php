<?php

class reponse
{
    private ?int $id = null;
    private ?string $date = null;
    private ?string $description = null;
    private ?int $id_reclamation = null;


    public function __construct($date, $description, $id_reclamation)
    {
        $this->date = $date;
        $this->description = $description;
        $this->id_reclamation = $id_reclamation;
    }

    
    public function getId()
    {
        return $this->id;
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


    public function getIDReclamation()
    {
        return $this->id_reclamation;
    }

    
    public function setIDReclamation($id_reclamation)
    {
        $this->id_reclamation = $id_reclamation;

        return $this;
    }
}
