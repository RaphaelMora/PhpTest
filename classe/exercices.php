<?php

// Exercice 1
// Créer une class avec au moins 2 attributs
// Créer deux constructeurs pour cette class.
// Créer une méthode toString sur cette class permettant d’afficher ses différents attributs. 
// Instancier deux objets de cette class, chacun basé sur un des constructeurs, et appelle leur méthode permettant d’afficher leur attribues.  
// Ajoute une autre méthode, qui affiche les différents attributs, mais dans un autre ordre. 
// Appelle également cette méthode en plus que la toString. 

class Country
{
    public $city;

    public $persons;

    public function __construct($city = "France", $persons = 60000)
    {
        $this->city = $city;
        $this->persons = $persons;
    }

    public function __toString()
    {
        if ($this->city >= 60000)
            return "C'est un petit pays";
        else
            return "Vous habitez en " . $this->city . " le namebre d'habitants et de " . $this->persons;
    }
}

$coutnry = new Country();
$country2 = new Country('Canada', 3);
$allCountry = $country . "\n" . $country2;
$check = $coutnry->__toString();

echo $check;

// Exercice 2
// Créer une class représentant une personne, avec un name, un âge et une adress
// Créer une méthode pour cet class permettant de livrer un gift chez la personne (en écrivant un message dans la console avec l’adress a cet effet)
// Donner une méthode pour cette personne qui fête son birthday, en gérant la question d'âge, en écrivant un message a propos de l’anniversaire et en lui livrant un gift. 
// Créer une nouvelle class représentant un animal avec une méthode lui permettant de faire un sound 
// Ajoutez un animal préféré à la class personne.
// Créer une méthode permettant d’entendre le sound de son animal préféré. N’oublier pas de gérer le cas où la personne n’a pas d’animal préféré. 

class Person
{
    public $name;
    public $age;
    public $adress;
    public $myAnimal;

    public function __construct($name = "Francis", $age = 18, $adress = "Tu connais", $myAnimal = "Chien")
    {
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
        $this->myAnimal = $myAnimal;
    }

    public function gift()
    {
        return "Veuillez livrer à " . $this->adress . "\n";
    }

    public function birthday()
    {
        $this->age = $this->age + 1;
        echo "Bon anniversaire, " . $this->name . " aujourd'hui tu as " . $this->age . "\n";
        $this->gift();
    }

    public function animalSound()
    {
        if ($this->myAnimal === null) {
            return "Tu n'as pas d'animal préféré. \n";
        } else {
            return $this->myAnimal->sound() . "\n";
        }
    }
}

class Animal
{
    public $specie;

    public function __construct($specie)
    {
        $this->specie = $specie;
    }

    public function sound()
    {
        echo "Le " . $this->specie . " fait tel bruit (et d'ailleurs c'est chiant)";
    }
}
$animals = new Animal("");
$person1 = new Person("", $animals);
$person2 = new Person("Jean", 18, "Chez sa mère", new Animal("chat"));

$allPersons = $person1 . "\n" . $person2;
$person1->gift();
$person1->birthday();
$person1->animalSound();

echo $allPersons;

// Exercice 3  (Exploration)
// Créer une class représentant un enum
// Créer une class utilisant une liste. 

enum Type
{
    case Fire;
    case Water;
    case Grass;

    case Electrik;
}
;

class PokedexEntries
{
    public $name;
    public Type $type;
    public function __construct($name = "Pikachu", $type = Type::Electrik)
    {
        $this->name = $name;
        $this->type = $type;
    }
}
;

$pokemonList = new PokedexEntries("", "");
$catch = new PokedexEntries(
name: 'Salamèche',
type: Type::Fire,
);

$AllPokemons = $pokemonList . "\n" . $catch;
echo $AllPokemons;