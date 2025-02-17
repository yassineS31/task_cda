<?php
class Maison{
    // Attribu :
    private ?string $nom ;
    private ?int $largeur ;
    private ?int $longueur ;
    // Bonus :
    private ?int $nbrEtage;

    public function __construct(?string $nom, ?int $largeur,?int $longueur,?int $nbrEtage){
        $this->nom = $nom;
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        $this->nbrEtage = $nbrEtage;
    }

    // Getter
    public function getNom():?string{
        return $this->nom;
    }
    public function getLargeur():?string{
        return $this->largeur;
    }
    public function getLongueur():?string{
        return $this->longueur;
    }
    public function getNbrEtage():?int{
        return $this->nbrEtage;
    }

    // SETTER
    public function setNom(?string $NouveauNom):Maison{
        $this->nom =$NouveauNom;
        return $this;
    }

    public function setLargeur (?int $NouvelleLargeur):Maison{
        $this->largeur = $NouvelleLargeur;
        return $this;
    }

    public function setLongeur (?int $NouvelleLongueur):Maison{
        $this->longueur = $NouvelleLongueur;
        return $this;
    }
    public function setNbrEtage (?int $nbrEtage):Maison{
        $this->nbrEtage = $nbrEtage;
        return $this;
    }

    // Methode de calcul de la surface VERSION BASIQUE:
    // public function calculSurface():string{
    //     $result = $this->longueur * $this-> largeur;
    //     return "<p> la surface de nomMaison est égale à $result m2 </p> ";
    // }
    // VERSION avec etage
    public function calculSurface():string{
        $result = ($this->longueur* $this->largeur)* $this->nbrEtage;
        return "<p> la surface de nomMaison est égale à $result m2 </p> ";
    }

}

