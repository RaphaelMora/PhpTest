<?php
////////// EXERCICE 1 //////////

// On veux demander à l'utilisateur de rentrer les horaires d'ouverture du magasin
//l'utilisateur rentre une heure et on lui répond si c'est ouvert

// le crénaux horaire
// heure du début
// heure de fermeture
// on vérifie que l'heure du début et plus petite que l'heure de fermeture
// On lui demande si il veux continuer de rentrer les heures O/N 

$creneaux = [];

while (true) {
    $debut = (int) readline("Veuillez entrer une heure d'ouverture : ");
    $fin = (int) readline("Veuillez entrer une heure de fermeture : ");
    if ($debut >= $fin) {
        echo " Vous ne pouvez pas rentrer une heure d'ouverture supérieur à l'heure de fermeture \n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Ajouter un nouveau créneaux (n) : ");
        if ($action == "n") {
            break;
        } else {

        }
    }
}

$heure = (int) readline("Vous souhaitez venir à quel heure ? ");
$creneauxTrouve = false;

foreach ($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauxTrouve = true;
        break;
    }
}

if ($creneauxTrouve) {
    echo "Votre magasin est ouvert \n";
} else {
    echo "Le magasin est fermé";
}

// On peux avoir une alternative
// en affichant comme résultat les horaires d'ouvertures

echo "le magasin est ouvert de ";

foreach ($creneaux as $k => $creneau) {
    if ($k) {
        echo " et de ";
    }
    echo $creneau[0] . " heure à " . $creneau[1] . " heure .";
}