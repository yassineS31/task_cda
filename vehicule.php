<?php
class Vehicule{
    //Attribut
    private ?string $nomVehicule;
    private ?int $nbrRoue;
    private ?string $couleur;
    private ?string $proprietaire;
    private ?int $vitesseMax = 250;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nomVehicule,?int $nbrRoue, string $couleur = "Noire"){
        $this->nomVehicule= $nomVehicule;
        $this->nbrRoue = $nbrRoue;
        $this->couleur = $couleur;
    }

    //GETTER ET SETTER
    public function getNomVehicule():?string{
        return $this->nomVehicule;
    }
    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }

    public function getCouleur():?string{
        return $this->couleur;
    }

    public function getProprietaire():?string{
        return $this->proprietaire;
    }

    public function getVitesseMax():?int{
        return $this->vitesseMax;
    }

    // SETTER
    
    public function setNomVehicule(?string $NouveauNomVehicule):Vehicule{
        $this->nomVehicule = $NouveauNomVehicule;
        return $this;
    }

    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }

    public function setCouleur(?string $newCouleur):Vehicule{
        $this->couleur = $newCouleur;
        return $this;
    }

    public function setVitesseMax(?int $newVitesseMax):Vehicule{
        $this->vitesseMax = $newVitesseMax;
        return $this;
    }

    //METHODE
    public function accelerer(?int $newVitesse):void{
        $this->setVitesseMax(($this->getVitesseMax() + $newVitesse));
        echo '<br>Je file maintenant à '.$this->getVitesseMax().' km/h !';
    }

    public function detect():string{
        return $this->nbrRoue == 2 ? 'moto': 'voiture';
    }

    public function  boost():string{
        $newVitesse = $this->getVitesseMax() +50;
        $this->setVitesseMax(($newVitesse));
        return 'La vitesse est augmenter de 50 ! ';
    }
    public function plusRapide($vehicule1,$vehicule2):string{
        $vehicule1 = $this->getVitesseMax();
        $vehicule2 = $vehicule2->getVitesseMax();
        $nom1 = $this->getNomVehicule();
        $nom2 = $vehicule2->getNomVehicule();
        return $vehicule1>$vehicule2 ? "$nom1 est plus rapide que $nom2" : "$nom2 est plus rapide que $nom1";
    }
}