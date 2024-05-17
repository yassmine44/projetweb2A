<?php
class entreprise
{
    private ?int $identreprise = null;
    private ?string $nom = null;
    private ?string $domaine = null;
   

    public function __construct($identreprise = null, $n, $d)
    {
        $this->identreprise = $identreprise;
        $this->nom = $n;
        $this->domaine = $d;
       
    }


    public function getIdentreprise()
    {
        return $this->identreprise;
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


    public function getdomaine()
    {
        return $this->domaine;
    }


    public function setdomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }



}
