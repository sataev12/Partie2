<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec
    qui hérite (extends) de la classe voiture et qui a une propriété supplémentaire (autonomie).

    Instancier une voiture "classique" et une voiture "électrique" ayant les caractéristiques suivantes:

        Peugeot 408: $v1 = new Voiture("Peugeot", "408");
        BMW i3 150: $ve1 =new VoitureElec("BMW", "i3", 100);

    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 
        echo $v1->getInfo()."<br/>";   
        echo $ve1->getInfo()."<br/>"; 
</p>

<h2>Résultat</h2>

<?php

class Voiture {
    protected string $marque;
    protected string $modele;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

   
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    } 
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    //Méthode pour afficher Info
    public function getInfos(){
        return "{$this->marque}, {$this->modele}";
    }


}

class VoitureElec extends Voiture{
    private int $autonom;

    public function __construct( $marque,  $modele, $autonom)
    {
        parent::__construct($marque, $modele);
        $this->autonom = $autonom;                       
    }
    


    public function getAutonom()
    {
        return $this->autonom;
    }

    public function setAutonom($autonom)
    {
        $this->autonom = $autonom;

        return $this;
    }

    public function getInfos(){
        return parent::getInfos() . " {$this->autonom}";
    }


}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";
