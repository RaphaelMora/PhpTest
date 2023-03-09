<?php

////////// IF //////////

$notes = (int) readline("Veuillez entrer votre note: ");
// Comme j'essaie de rentrer un string je vais devoir lui demander de convertir en nombre entier grace à int

// Si j'ai une note supérieure à 10 je suis un fayot, si j'ai 10 j'ai pile la moyenne et dessous c'est dead chacal
if ($notes > 10) {
    echo "Bravo t'es un fayot \n";
} else if ($notes === 10) {
    echo "Vous avez pile la moyenne \n";
} else {
    echo "C'est dommage tu pue la merde \n";
}

////////// SWITCH //////////

// Si par contre je souhaite faire une action en fonction de ce que l'utilisateur entre alors dans ce cas je vais utiliser les switch

$action = (int) readline("Que décidez-vous de faire : (1: Attaquer, 2: Défendre, 3:Fuir)");

switch ($action) {
    case 1:
        echo "à l'attaque ! \n";
        break;
    case 2:
        echo "Bouclier ! \n";
        break;
    case 3:
        echo "je me casse ! \n";
        break;
    default:
        echo "C'était pas compliqué t'avais 3 choix \n";
}

// Maintenant on aimerais savoir si un magasin est ouvert

$heure = (int) readline("Veuillez entre l'heure : ");

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 19)) {
    echo "Votre magasin est ouvert \n";
} else if (12 < $heure && $heure < 14) {
    echo "c'est la pause ! \n";
} else {
    echo "votre magasin est fermé \n";
}

// Pour rappel

// avec les && qui veux dire ET
// VRAI && VRAI = VRAI
// VRAI && FAUX = FAUX
// FAUX && FAUX = FAUX

// avec les || qui veux dire OU
// VRAI && VRAI = VRAI
// VRAI && FAUX = VRAI
// FAUX && FAUX = FAUX