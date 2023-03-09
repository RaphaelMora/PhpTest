<?php

////////// WHILE //////////

// si on veux que l'utilisateur devine un nombre et que la question soit posée à chaque fois 
// TANT QUE il n'est pas strictement égal au chiffre attendu

$chiffre = null;

while ($chiffre !== 36) {
    $chiffre = (int) readline("Devine mon chiffre: ");

}
echo "Bravo";

////////// FOR //////////

// si je veux créer un compteur qui s'arrêtera au nombre voulu 

for ($i = 0; $i <= 100; $i++) {
    echo "- $i" . "\n";
}
echo "\n";

////////// FOR EACH //////////

// Pour explorer le contenu d'un tableau on utilise cette boucle et on creer dedans une nouvelle variable où sera incrémenter la note

$notes = [12, 20, 18, 7];

foreach ($notes as $note) {
    echo $note . "\n";
}
echo "\n";
// ici on récupère l'ensemble des notes

// ici je souhaite savoir dans quelle classe se trouvent les elève

$classe = [
    "CM2" => "Raph",
    "CM1" => "Charlene"
];

foreach ($classe as $section => $eleve) {
    echo "$eleve est dans la section $section \n";
}

echo "\n";

// Pour rendre la chose plus complexe on va mettre un tableau de prénom

$ecole = [
    "CM2" => ["Raph", "Jean", "Marc"],
    "CM1" => ["Sasha", "Aaron", "Kevin"]
];

foreach ($ecole as $classList => $eleveList) {
    echo " Dans la classe de $classList \n";
    foreach ($eleveList as $list) {
        echo " - $list \n";
    }
}
echo "\n";