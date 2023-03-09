<?php

// $name = readline("Veuillez entrer votre nom ");
$nom = 'Mora';
function bonjour($prenom = null, $nom = null)
{
    if ($prenom === null) {
        return "Bonjour \n";
    }
    return " Bonjour " . $prenom . " " . $nom . "\n";
}

$salutation = bonjour($nom);
echo $salutation;