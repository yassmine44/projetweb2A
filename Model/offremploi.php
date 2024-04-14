<?php

class offremploi {
    private int $ido;
    private string $titre;
    private string $datelimitc;
    private string $typecontrat;
    private string $salaire;
    private int $idu;

    public function __construct(int $ido, string $titre, string $datelimitc, string $typecontrat, string $salaire, int $idu)
    {
        $this->ido = $ido;
        $this->titre = $titre;
        $this->datelimitc = $datelimitc;
        $this->typecontrat = $typecontrat;
        $this->salaire = $salaire;
        $this->idu = $idu;
    }

    // Getters
    public function getido(): int
    {
        return $this->ido;
    }

    public function gettitre(): string
    {
        return $this->titre;
    }

    public function getdateLimitc(): string
    {
        return $this->datelimitc;
    }

    public function gettypeContrat(): string
    {
        return $this->typecontrat;
    }

    public function getsalaire(): string
    {
        return $this->salaire;
    }

    public function getidu(): int
    {
        return $this->idu;
    }

    // Setters
    public function settitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function setdateLimitc(string $datelimitc): void
    {
        $this->datelimitc = $datelimitc;
    }

    public function settypeContrat(string $typecontrat): void
    {
        $this->typecontrat = $typecontrat;
    }

    public function setsalaire(string $salaire): void
    {
        $this->salaire = $salaire;
    }
    public function setido(int $ido): void
    {
        $this->ido = $ido;
    }
    public function setidu(string $idu): void
    {
        $this->idu = $idu;
    }
}

?>
