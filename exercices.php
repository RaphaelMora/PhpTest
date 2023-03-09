<?php

/*1 - L’objectif est de réaliser un algorithme qui : 
Affiche tous les nombres de 1 à 100 dans l’ordre avec un saut de ligne entre chacun 
Pour tous les multiples de 3, affiche "Fizz" - Pour tous les multiples de 5, affiche "Buzz"
Pour tous les multiples de 3 et de 5, affiche "FizzBuzz" */

// for ($i = 0; $i < 100; $i++) {
//     echo "$i \n";

//     if ($i % 3 == 0) {
//         echo "Fizz \n";
//     } else if ($i % 5 == 0){
//         echo "Buzz \n";
//     } else if ($i % 15 == 0){
//         echo "fizzBuzz \n";
//     } else{
//         echo "\n";
//     }
// }

//2.2
$im = "je suis à ma";
$monBool = "ième boucle";
$x = 0;

for ($i = -100; $i <= 100; $i++) {
    echo "$im $i $monBool";
    if ($x < $i) {
        echo " et mon i est positif \n";
    } else {
        echo " et mon i est négatif \n";
    }
}

// 2.1
$monCode = strval(readline("Entrer mon code :"));
echo "mon code est : $monCode \n";

for ($i = 0; $i <= 9999; $i++) {
    echo "Je test valeur $i \n";
    if ($monCode == $i) {
        echo "Mot de passe est $i \n";
        break;
    }
}

//trésor
$positionDepartX = readline("Donne depart X : ");
$grandeurX = readline("Grandeur en X : ");
$positionDepartY = readline("Donne depart Y : ");
$grandeurY = readline("Grandeur en Y : ");
$asFoundTresors = false;

for ($x = $positionDepartX; $x <= ($positionDepartX + $grandeurX); $x++) {
    for ($y = $positionDepartY; $y <= ($positionDepartY + $grandeurY); $y++) {
        echo "Ma position est : $x/$y\n";
        $asFoundTresors = (("$x/$y") == "10/11");
        if ($asFoundTresors)
            break;
    }

    if ($asFoundTresors)
        break;
}

if ($asFoundTresors) {
    echo "trouver le trésors";
} else {
    echo "A zut, j'ai perdu";
}

include_once("../prof/carteTresors.php");