<?php

class post
{
    private ?int $id = null;
    private ?string $date = null;
    private ?string $description = null;
    private ?int $post = null;


    public function __construct($date, $description, $post)
    {
        $this->date = $date;
        $this->description = $description;
        $this->post = $post;
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
        return $this->post;
    }

    
    public function setIDReclamation($post)
    {
        $this->post = $post;

        return $this;
    }
}
