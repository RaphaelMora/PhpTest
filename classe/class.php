<?php
class Person
{
    public $name;
    public $age;
    public $adresse;

    public $dentSale;
    public function __construct($name = "Robert", $age = 21, $adresse = "30 rue du bassin")
    {
        $this->name = $name;
        $this->age = $age;
        $this->adresse = $adresse;
        $this->dentSale = 5;

    }
    public function __toString()
    {
        if ($this->age >= 18)
            return " Yo je suis juste un gamin \n";
        else
            return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old. I'm leave at " . $this->adresse . "\n";
    }

    public function brosseDent($nbDents)
    {
        $this->dentSale -= $nbDents;
        if ($this->dentSale < 0)
            $this->dentSale = 0;
    }
}

$person = new Person();
$prompt = $person->__toString();
echo $prompt;

////////// EXEMPLE 2 //////////

// On souhaite comparer des horaires et également les afficher en html

class Creneau
{

    public $debut;

    public $fin;

    public function __construct(int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function toHTML(): string
    {
        return "<strong>{$this->debut} heure</strong> à <strong>{$this->fin} heure</strong>";
    }

    public function inclusHeure(int $heure): bool
    {
        return $heure >= $this->debut && $heure <= $this->fin;
    }

    public function intersect(Creneau $creneau): bool
    {
        return $this->inclusHeure($creneau->debut) ||
            $this->inclusHeure($creneau->debut) ||
            ($this->debut < $creneau->debut && $this->fin < $creneau->fin);
    }

}
;

$creneau = new Creneau(9, 12);
$creneau2 = new Creneau(14, 16);
$creneau->intersect($creneau2);
echo $creneau->toHTML() . "et de " . $creneau2->toHTML();