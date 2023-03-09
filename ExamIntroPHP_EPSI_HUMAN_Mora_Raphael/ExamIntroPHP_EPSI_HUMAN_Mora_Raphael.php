<?php

class Potion
{
    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

class PotionMagique extends Potion
{
    public $puissance;

    public function __construct($description, $puissance)
    {
        parent::__construct($description);
        $this->puissance = $puissance;
    }

}

class Ingredient
{
    public $nom;
    public $organique;
    public $liquide;
    public $poids;

    public function __construct($nom, $organique, $liquide, $poids)
    {
        $this->nom = $nom;
        $this->organique = $organique;
        $this->liquide = $liquide;
        $this->poids = $poids;
    }
}

class Chaudron
{
    public $description;
    public $ingredients = array("", "", "");


    public function __construct($description, $ingredients)
    {
        $this->description = $description;
        $this->ingredients = $ingredients;
    }
    public function addIngredient($ingredient)
    {
        array_push($this->ingredients);

    }
    public function faireBruit($organique, $liquide, $poids)
    {
        if ($organique) {
            return "Splish";
        } else if (!$liquide && $poids < 10) {
            return "Sploush";
        } else {
            return "Splash";
        }
    }

    public function createPotion($description, $puissance)
    {
        if ($description === true) {
            echo "Potion Magique" . $this->ingredients;
            if (true) {
                echo $puissance === $this->ingredients->poids;
            }
        } else {
            echo "Potion" . $this->ingredients;
        }
    }
}

$chaudron = new Chaudron("", "");
$jusDePomme = new Ingredient("Jus de Pomme", "organique", "liquide", "20");
$PierrePhilosophal = new Ingredient("Pierre philosophal", "non organique", "non liquide", "30");


$chaudron->addIngredient($jusDepomme)->faireBruit();
$chaudron->addIngredient($PierrePhilosophal)->faireBruit();
array_splice($chaudron, 0);

$NezDeGirafe = new Ingredient("Nez de girafe", "organique", "non liquide", "6");
$PlumeDePigeon = new Ingredient("Plume de pigeon", "non organique", "non liquide", "1");
$MorveDeChien = new Ingredient("Morve de chien", "organique", "liquide", "5");
$chaudron->addIngredient($NezDeGirafe);
$chaudron->addIngredient($PlumeDePigeon);
$chaudron->addIngredient($MorveDeChien);

$chaudron->faireBruit($PierrePhilosophal, $NezDeGirafe, $jusDepomme);
$potionMagique = new PotionMagique("Potion magique", $chaudron);
$potion = new Potion($potionMagique);

echo $chaudron;