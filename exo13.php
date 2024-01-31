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



        public function __construct($marque, $modele, $nbPortes)
        {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
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

                //Méthode demarrer
                public function demarrer(){
                    if ($this->estDemarre == true){
                        echo "Le véhicule {$this->marque} {$this->modele} est déjà démarré";
                    }else{
                        $this->estDemarre = true;
                    }
                 }
                //Méthode accelerer
                public function accelerer($vitesse){
                    $vitesse = $vitesse + $this->vitesseActuelle;
                    echo "Le véhicule {$this->marque} {$this->modele} accélère de {$vitesse} km/h";
                 }
        
                
                //Méthode stopper
                public function stopper(){
                    if($this->stopper == true){
                        echo "Le véhicule {$this->marque} {$this->modele} est stoppée";
                    }elseif($this->stoppe{
                        echo "Le véhicule {$this->marque} {$this->modele} est à l'arrêt";
                    }
                }
        
                //Afficher Infos
                public function afficheInfo1(){
                    echo "Info véhicule 1<br>";
                    echo "****************************<br>";
                    echo "Nom et modèle du véhicule : {$this->marque} {$this->modele}<br>";
                    echo "Nombre de portes : {$this->nbPortes}<br>";
                    echo $this->demarrer()."<br>";
                    echo "Sa vitesse actuelle est de : {$this->vitesseActuelle} km/h<br>";
                }
        
               

                //Methode ralentit(vitesse)
                public function ralentir() {}



    }


$v1 = new Voiture("Peugeot", "408", 5);
$v1->demarrer();
$v1->accelerer(15);
