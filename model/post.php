<?php

class post
{
    private ?int $id_post = null;
    private ?string $date = null;
    private ?string $description = null;

    //private ?string $img = null;
   // private ?int $id_post_comment = null;


    public function __construct($date, $description,$img)
    {
        $this->date = $date;
        $this->description = $description;
        $this->img = $img;
        //$this->id_post_comment = $id_post_comment;
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
