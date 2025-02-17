<?php

class Vehicule{

    //Attribut
    private ?string $nomVehicule;
    private ?int $nbrRoue;
    private ?int $vitesse = 250;

    //GETTERS

    public function getNomVehicule():?string{
        return $this->nomVehicule;
    }

    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }

    public function getVitesse():?int{
        return $this->vitesse;
    }

    //SETTERS

    public function setNomVehicule(?string $newNom):Vehicule{
        $this->nomVehicule = $newNom;
        return $this;
    }

    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }

    public function setVitesse(?int $newVitesse):Vehicule{
        $this->vitesse = $newVitesse;
        return $this;
    }

    //METHODES

    public function detect():string{
        return $this->nbrRoue > 3 ? 'Voiture' : 'Moto';
    }

    public function boost():void{
        $this->setVitesse(($this->getVitesse() + 50));
        echo 'Je file maintenant à '.$this->getVitesse().' km/h !';
    }

    public function plusRapide(?Vehicule $vehicule2):string{
        return $this->vitesse > $vehicule2->getVitesse() ? $this->nomVehicule : $vehicule2->getNomVehicule();
    }
}