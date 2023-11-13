<div class="content">
    <?php

        class Personne{ // création d'une classe "Personne"
            public $prenom; // création d'une variable avec des accès publics
            public $nom;
            public $age;

            public function __construct($prenom, $nom, $age){
                $this->prenom=$prenom;
                $this->nom=$nom;
                $this->age=$age;
            }

            public function nomComplet(){
                // return $this->nom.' '.$this->prenom.' '.$this->age.PHP_EOL;
                return sprintf('%s %s %d',$this->nom,$this->prenom,$this->age);
            }

            public function danser(){
                echo $this->prenom." est entrain de danser".PHP_EOL;
            }
        }

        


        //création d'un nouvel objet à partir de la classe Personne ou nouvelle instance de la classe personnne
        $magne = new Personne('Magne', 'Matangou', 43);
        $isaac = new Personne('Isaac', 'Lbôgoss', 24);
        
        echo $magne->prenom . PHP_EOL;
        echo $magne->nom . PHP_EOL;
        echo $magne->age . PHP_EOL;
        $magne-> danser();
        $toutlenom=$magne-> nomComplet();
        echo "Le nom complet est $toutlenom";
        // echo $magne ->prenom . PHP_EOL;

        // echo $isaac ->prenom . PHP_EOL;

        echo '<br><br>---------------------------------------<br><br>';

    ?>
