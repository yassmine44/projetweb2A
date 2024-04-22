<?php

class post
{
    private ?int $id = null;
    private ?string $date = null;
    private ?string $description = null;
   // private ?int $id_comment = null;


    public function __construct($date, $description)
    {
        $this->date = $date;
        $this->description = $description;
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
