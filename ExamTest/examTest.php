<?php

class Pomme
{
    public $taille;

    public function __construct($taille = 3)
    {
        $this->taille = $taille;
    }
}

class JusDePomme
{
    public $taille;

    public function __construct($taille)
    {
        $this->taille = $taille;
    }

    public function __toString()
    {
        return "Je suis un jus d'une taille de :" . $this->taille . "\n";
    }
}

class Cidre extends Pomme
{
    public $tauxAlcool;

    public function __construct($taille, $tauxAlcool)
    {
        $this->taille = $taille;
        $this->tauxAlcool = $tauxAlcool;
    }
}

class Extracteur
{

    public function extrait($listeDePomme, $isJus)
    {
        $totalTaillePommes = 0;
        foreach ($listeDePomme as $pomme) {
            $totalTaillePommes += $pomme->taille;
        }

        if ($isJus) {
            return new JusDePomme($totalTaillePommes) / 1.5;
        } else {
            $tauxAlco = 0;
            if ($totalTaillePommes < 30)
                $tauxAlco = 5;
            else
                $tauxAlco = 15;

            return new Cidre($totalTaillePommes / 3, $tauxAlco);
        }
    }
}

function createSacDePomme($nombredePomme)
{
    $listeDePomme = array();
    for ($i = 0; $i < $nombredePomme; $i++) {
        array_push($listeDePomme, new Pomme());
    }
    return $listeDePomme;
}

$listeDePomme = createSacDePomme(10);
$listeDePomme = createSacDePomme(15);
$listeDePomme = createSacDePomme(20);

$extracteur = new Extracteur();
$jus1 = $extracteur->extrait($listeDePomme, true);
$cidre1 = $extracteur->extrait($listeDePomme, false);
$cidre2 = $extracteur->extrait($listeDePomme, false);

$listeDeJus = [$jus1, $cidre1, $cidre2];

foreach ($listeDeJus as $jus) {
    echo "$jus \n";
}