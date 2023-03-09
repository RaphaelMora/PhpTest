<?php

// Liste qui contient une série de valeurs
$notes = [10, 20];

echo $notes[0] . "\n"; //affiche la première valeur du tableau
echo $notes[1] . "\n"; //affiche la seconde valeur du tableau

// Tableau avec plus de données
$classe = [
    "nom" => "Bon",
    "prenom" => "Louis",
    "notes" => [10, 12, 20]
];

// Pour changer une valeur dans le tableau il me suffit de lui réassigner une valeur
$classe["prenom"] = "Jean";

// Pour ajouter une note par exemple dans le tableau des notes
$classe["notes"][3] = 18;
// On lui demande de se positionner à l'emplacement 4 qui porte donc le numéro 3 comme on commence à 0 et on lui donne la note
// On peux aussi ne rien mettre et comme ça il le mettra automatiquement à la fin

echo $classe["prenom"] . ' ' . $classe["nom"];

// Ceci est une représentation graphique du contenu de notes
print_r($classe["notes"]) . "\n";

// On peux aussi avoir plusieurs tableaux

$CM2 = [
    [
        "nom" => "Macron",
        "prenom" => "Manu",
        "notes" => [1, 6, 8]
    ],
    [
        "nom" => "Macron",
        "prenom" => "Manu",
        "notes" => [1, 6, 8]
    ]
];

// Pour récupérer la 3ème note du deuxième élève, il me faudra faire

echo "La note de " . $CM2[1]["prenom"] . ' ' . $CM2[1]["nom"] . " est de " . $CM2[1]["notes"][2];

// On lui demande là de chercher le prenom dans la deuxième position du tableau, pareil pour son nom et de chercher la 2eme entrée dans note du deuxième tableau