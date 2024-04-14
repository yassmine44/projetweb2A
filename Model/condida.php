<?php

class condida {

    private int $idc;
    private int $ido;
    private string $nomc;
    private string $emailc;
    private string $lettre;
    private string $cv;

 
    public function __construct(int $idc , int $ido, string $nomc, string $emailc, string $lettre, string $cv)
    {   
        $this->idc = $idc;
        $this->ido = $ido;
        $this->nomc = $nomc;
        $this->emailc = $emailc;
        $this->lettre = $lettre;
        $this->cv = $cv;
        
    }
    
    // Getters
    public function getidc(): int
    {
        return $this->idc;
        
    }

    public function getido(): int
    {
        return $this->ido;
    }
    public function getnomc(): string
    {
        return $this->nomc;
    }
    
    public function getemailc(): string
    {
        return $this->emailc;
    }
    
    public function getlettre(): string
    {
        return $this->lettre;
    }
    
    public function getcv(): string
    {
        return $this->cv;
    }

    // Setters
    public function setidc(int $idc): void
    {
        $this->idc = $idc;
    }
    public function setido(int $ido): void
    {
        $this->idc = $ido;
    }
    public function setnomc(string $nomc): void
    {
        $this->nomc = $nomc;
    }
    
    public function setemailc(string $emailc): void
    {
        $this->emailc = $emailc;
    }
    
    public function setlettre(string $lettre): void
    {
        $this->lettre = $lettre;
    }
    
    public function setcv(string $cv): void
    {
        $this->cv = $cv;
    }
}

?>
