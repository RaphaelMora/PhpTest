<?php

////////// EXERCICE 1 //////////

// Consigne :
// Vous devez respecter les consignes 
// à la lettre mais également respecter les bonnes pratiques de nomenclature java (camelCase, SCREAMING_SNAKE_CASE, etc).
//  Toute erreur de nommage ou de nomenclature sera pénalisée.  
// Toute tentative de triche résultera en un 0 pour les deux partis concernés,
//  à moins qu’un des deux n’ait été consentant, auquel cas, seul le parti concerné se verra pénalisé. 

// Consignes de rendu
// Une fois le travail terminé, vous devrez produire 
// Une archive .zip 
// Avec comme nom ExamIntroPHP_EPSI_HUMAN_nom_prenom.zip
// Avec comme intitulé de mail le même nom que votre fichier.
// L'envoyer à simon.bedard@mail-formateur.net 

// Noter que tout fichier reçu après les heures de l'examen sera refusé.
//   Noter également que toute erreur de nomenclature sera pénalisée. 

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
    public $ingredients = array();
    public $description;

    public function __construct($description, $ingredients)
    {
        $this->description = $description;
        $this->ingredients = $ingredients;
    }
    public function addIngredient($ingredient)
    {
        array_push($this->ingredients, $ingredient->faireBruit());

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

    public function createPotion($description)
    {
        if ($description === true) {
            echo "Potion Magique" . $this->ingredients;
        } else {
            echo "Potion" . $this->ingredients;
        }
    }
}

$chaudron = new Chaudron("Chaudron", "");
$jusDepomme = new Ingredient("Jus de Pomme", "organique", "liquide", "20");
$PierrePhilosophal = new Ingredient("Pierre philosophal", "non organique", "non liquide", "30");


$chaudron->addIngredient($jusDepomme);
$chaudron->addIngredient($PierrePhilosophal);
$potion = new PotionMagique($chaudron->description, $chaudron->ingredients);

echo $potion;