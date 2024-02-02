<h1>Exercice 13</h1>

<p>Créer une classe Voiture passédant les propriétés suivant: marque, modèle, nbPortes et vitesseActuelle
     ainsi que les méthodes demarrer(), accelerer() et stopper() en plus des accesseur (get) et 
    mutateurs(set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode 
personnalisée pourra afficher toutes les informations d'un véhicule

v1->"Peugeot", "408", 5
v2-> "Citroen", "C4", 3

Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de test
pour vérifier la cohérance de la classe de Voiture. </p>

<h2>Réseltat</h2>

<?php

    class Voiture{
        private string $marque;
        private string $modele;
        private int $nbPortes;
        private int $vitesseActuelle = 0;
        private bool $estDemarre = false;
        private int $accelerer = 0;
        private bool $stopper = true;
        private int $numeroVehicule;
        
        private static int $nbVehicule = 1;



        public function __construct($marque, $modele, $nbPortes)
        {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->numeroVehicule = self::$nbVehicule;
            self::$nbVehicule++;
        }


        //Getter et Setter de propriété de Voiture
        public function getMarque()
        {
                return $this->marque;
        }

        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }
         

        public function getModèle()
        {
                return $this->modele;
        }

      
        public function setModèle($modèle)
        {
                $this->modele = $modèle;

                return $this;
        }
   public function getNbPortes()
            {
                        return $this->nbPortes;
            }
            public function setNbPortes($nbPortes)
            {
                        $this->nbPortes = $nbPortes;

                        return $this;
            }

        public function getVitesseActuelle()
        {
                return $this->vitesseActuelle;
        }

        public function setVitesseActuelle($vitesseActuelle)
        {
                $this->vitesseActuelle = $vitesseActuelle;

                return $this;
        }
        public function getEstDemarre()
        {
                return $this->estDemarre;
        }

        public function setEstDemarre($estDemarre)
        {
                $this->estDemarre = $estDemarre;

                return $this;
        }
        public function getAccelerer()
        {
                return $this->accelerer;
        }
        public function setAccelerer($accelerer)
        {
                $this->accelerer = $accelerer;

                return $this;
        }
        public function getStopper()
        {
                return $this->stopper;
        }
        public function setStopper($stopper)
        {
                $this->stopper = $stopper;

                return $this;
        }
        public function getNumeroVehicule()
        {
                return $this->numeroVehicule;
        }

        public function setNumeroVehicule($numeroVehicule)
        {
                $this->numeroVehicule = $numeroVehicule;

                return $this;
        }






                //Méthode demarrer
                public function demarrer(){
                    if ($this->estDemarre){
                        echo "Le véhicule {$this->marque} {$this->modele} est déjà démarré<br>";
                    }else{
                        $this->estDemarre = true;
                        echo "Le véhicule {$this->marque} {$this->modele} démarre<br>";
                    }
                 }
                //Méthode accelerer
                public function accelerer($vitesse){
                    
                    if($this->estDemarre){
                        $this->vitesseActuelle += $vitesse;
                        echo "Le véhicule {$this->marque} {$this->modele} accélère de {$vitesse} km/h<br>";
                        echo "Le véhicule {$this->marque} {$this->modele} veut accélèrer de {$vitesse}<br>";
                    }else{
                        echo "Pour accélerer, il faut démarrer le véhicule {$this->marque} {$this->modele}<br>";
                    }

                 }
        
                
                //Méthode stopper
                public function stopper(){
                    if($this->estDemarre == false){
                        echo "Le véhicule {$this->marque} {$this->modele} est stoppé<br>";
                    }
                }
                //Méthode etat de véhicule
                public function etat(){
                        if($this->estDemarre){
                                echo "Le véhicule{$this->marque} est démarré";
                        }else {
                                echo "Le véhicule {$this->marque} est à l'arrêt";
                        
                        }
                                
                }
                
                //Afficher Infos
                public function afficheInfo1(){
                    echo "Info véhicule{$this->getNumeroVehicule()} <br>";
                    echo "****************************<br>";
                    echo "Nom et modèle du véhicule : {$this->marque} {$this->modele}<br>";
                    echo "Nombre de portes : {$this->nbPortes}<br>";
                    echo $this->etat()."<br>";
                    echo "Sa vitesse actuelle est de : {$this->vitesseActuelle} km/h<br>";
                }

                //Méthode pour la vitesse
                public function vitesseAct(){
                        echo "La vitesse du véhicule {$this->marque} est de : {$this->vitesseActuelle} km/h<br>";
                }
        
               

                //Methode ralentit(vitesse)
                public function ralentir($vitesse){
                        if($this->vitesseActuelle < $vitesse){
                                echo "Tu ne peut pas ralentir à {$vitesse}, car ta vitesse actuelle est de {$this->vitesseActuelle}<br>";
                        }else{
                                echo "Tu ralenti à {$vitesse}<br>";
                                $this->vitesseActuelle -= $vitesse;
                        }
                }


        
    }


// $v1 = new Voiture("Peugeot", "408", 5);
// $v1->demarrer();
// $v1->accelerer(15);
// $v1->afficheInfo1();
// $v1->vitesse();

$v2 = new Voiture("BMW", "X5", 5);
$v2->demarrer();
$v2->accelerer(10);
$v2->ralentir(3);
$v2->vitesseAct();
// $v2->stopper();
$v2->afficheInfo1();
