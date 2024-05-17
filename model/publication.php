<?php

class Publication{

    private $id, $id_blog, $title, $contenu, $date;

    public function __construct($id, $id_blog, $title, $contenu, $date)
    {
        $this->id = $id;
        $this->id_blog = $id_blog;
        $this->title = $title;
        $this->contenu = $contenu;
        $this->date = $date;
    }

    public function set_id($val){
        $this->id = $val;
    }

    public function get_id(){
        return $this->id;
    }

    public function set_id_blog($val){
        $this->id_blog = $val;
    }

    public function get_id_blog(){
        return $this->id_blog;
    }

    public function set_title($val){
        $this->title = $val;
    }

    public function get_title(){
        return $this->title;
    }

    public function set_contenu($val){
        $this->contenu = $val;
    }

    public function get_contenu(){
        return $this->contenu;
    }

    public function set_date($val){
        $this->date = $val;
    }

    public function get_date(){
        return $this->date;
    }
    
}

?>