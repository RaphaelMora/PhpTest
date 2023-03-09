<?php

//////// NE FONCTIONNE PAS ////////


// class Pokemon
// {
//     public $name;
//     public $type;

//     public $pokeball;

//     public $evolution;

//     public function __construct($name = "Pikachu", $type = "elec", $pokeball = "superBall", $evolution = "Raichu")
//     {
//         $this->name = $name;
//         $this->type = $type;
//         $this->pokeball = $pokeball;
//         $this->evolution = $evolution;
//     }

//     public function evolve1()
//     {
//         return "Wahoo votre $this->name à évoluer en $this->evolution";
//     }
// }

// class SuperEvolution extends Pokemon
// {
//     public $capacity;

//     public function __construct($evolution, $capacity = "super coup de boule")
//     {
//         parent::__construct($evolution);
//         $this->capacity = $capacity;
//     }

//     public function evolve2()
//     {
//         return "Votre" . $this->evolution . "Peux maintenant utiliser" . $this->capacity;
//     }
// }
// $Pokemon = new Pokemon(new SuperEvolution("Super-Raichu", "super-Fatal-Foudre"));

// echo $Pokemon . "\n";


// Exercice 1
// check--Créer une class avec au moins 3 attributs. 
// Surcharge/créer la méthode toString pour montrer ces 3 attributs quand tu print l’objet. 
// check--Créer un enfant pour cette class et ajoutez 2 attributs
// Modifie son toString pour afficher ces nouveaux attributs en plus des vieux. Utilise le super/parent pour simplifier cette méthode. 

class Perso
{
    public $catchphrase;

    public function __construct($catchphrase)
    {
        $this->catchphrase = $catchphrase;
    }

    public function __toString()
    {
        return "Il dit :" . $this->catchphrase . "\n";
    }
}

$listePerso = [new Perso("Bonjour je suis con")];
array_push($listePerso, new Perso("Salut moi aussi"));
array_push($listePerso, new Perso("Php c'est de la merde"));

$randomNumber = mt_rand(0, count($listePerso) - 1);
echo $listePerso[$randomNumber] . "\n";