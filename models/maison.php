<?php

class Maison {

    private ?string $nom;
    private ?int $longeur;
    private ?int $largeur;
    private ?int $nbrEtage;
    
    //Getter

    public function getNom(): string{
        return $this->nom;
    }
    
    public function getLongeur(): int {
        return $this->longeur;
    }

    public function getLargeur(): int {
        return $this->largeur;
    }

    public function getNbrEtage(): int {
        return $this->nbrEtage;
    }

    //Setter

    public function setNom(?string $data): void{
        $this->nom = $data;
    }

    public function setLongeur(?int $data): void{
        $this->longeur = $data;
    }

    public function setLargeur(?int $data): void{
        $this->largeur = $data;
    }

    public function setNbrEtage(?int $data): void{
        $this->nbrEtage = $data;
    }

    //Methods

    public function calculSurface(): int | float {
        return $this->longeur * $this->largeur;
    }

    public function calculSurfaceAvecEtage(): int | float {
        return ($this->longeur * $this->largeur) * $this->nbrEtage;
    }
}