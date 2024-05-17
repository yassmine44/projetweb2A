<?php

class Blog{

    private $id, $image, $nom, $description, $date;

    public function __construct($id, $image, $nom, $description, $date)
    {
        $this->id = $id;
        $this->image = $image;
        $this->nom = $nom;
        $this->description = $description;
        $this->date = $date;
    }

    public function set_id($val){
        $this->id = $val;
    }

    public function get_id(){
        return $this->id;
    }

    public function set_image($val){
        $this->image = $val;
    }

    public function get_image(){
        return $this->image;
    }

    public function set_nom($val){
        $this->nom = $val;
    }
    
    public function get_nom(){
        return $this->nom;
    }

    public function set_type($val){
        $this->type = $val;
    }
    
    public function set_description($val){
        $this->description = $val;
    }

    public function get_description(){
        return $this->description;
    }

    public function set_date($val){
        $this->date = $val;
    }

    public function get_date(){
        return $this->date;
    }
}

?>