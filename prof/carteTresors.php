<?php

$positionDepartX = readline("Donne depart X : ") ;
$grandeurX =  readline("Grandeur en X : ") ;
$positionDepartY = readline("Donne depart Y : ") ;
$grandeurY =  readline("Grandeur en Y : ") ;
$asFoundTresors = false ; 

for($x = $positionDepartX ; $x <= ($positionDepartX + $grandeurX) ; $x++)
{
    for($y = $positionDepartY ; $y <= ($positionDepartY + $grandeurY) ; $y++)
    {
        echo "Ma position est : $x/$y\n" ; 
        $asFoundTresors = (("$x/$y") == "10/11") ; 
        if($asFoundTresors)
            break ;
    }

    if($asFoundTresors)
        break ; 
}

if($asFoundTresors) {
    echo "trouver le trésors" ; 
} else {
    echo "A zut, j'ai perdu" ; 
}