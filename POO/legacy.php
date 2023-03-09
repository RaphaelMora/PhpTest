<?php
class GrandMere
{
    public $cookies;

    public function __construct($cookies)
    {
        $this->cookies = $cookies;
    }

}
class Mere
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name . " Premier du nom";
    }
}
class Fille extends Mere
{
    public $age;

    public function __construct($name, $age)
    {
        parent::__construct($name);
        $this->age = $age;
    }
}

$fille = new Fille("Gina", 14);
echo $fille->name . "\n";

//////// EXEMPLE 2 ////////

abstract class EtreVivant
{
    public $nom;
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public abstract function faireBruit();

}
abstract class Animal extends EtreVivant
{
    public $race;
    public $nombreDeJambes;

    public function __construct($nom, $race, $nombreDeJambes)
    {
        parent::__construct($nom);
        $this->race = $race;
        $this->nombreDeJambes = $nombreDeJambes;
    }

    public function __toString()
    {
        return "Mon petit nom est $this->nom je suis un $this->race et j'ai $this->nombreDeJambes pattes,";
    }
}

class Dog extends Animal
{

    public $breed;
    public $couleurDePoil;
    public function __construct($nom, $breed, $couleurDePoil, $race = "chien", $nombreDeJambes = 4)
    {
        parent::__construct($nom, $race, $nombreDeJambes);
        $this->breed = $breed;
        $this->couleurDePoil = $couleurDePoil;
    }

    public function __toString()
    {
        return parent::__toString() . " ma breed est " . $this->breed . " et ma couleur est " . $this->couleurDePoil . "." . "\n";
    }

    public function faireBruit()
    {
        echo "wouaf wouaf \n";
    }
}

class Cat extends Animal
{

    public $nombreDeSourisTue;
    public function __construct($nom, $nombreDeSourisTue)
    {
        parent::__construct($nom, "Chat", 4);
        $this->nombreDeSourisTue = $nombreDeSourisTue;
    }

    public function faireBruit()
    {
        echo "miaou miaou \n";
    }
}

class Chaton extends Cat
{

    public function faireBruit()
    {
        echo "miaou \n";
    }
}

$dog = new Dog("syn", "Cocker", "fauve");
$cat = new Cat("Bruce", "10");
$chaton = new Chaton("chien", "40");

echo $dog;
echo $dog->faireBruit();
echo $cat->faireBruit();
echo $chaton->faireBruit();