<?php
    // Définition de la chaîne de caractères
    $str = "Les choses que l'on Possède finissent par nous posséder.";

    // Parcours de la chaîne et affichage à l'envers
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        echo $str[$i];
    }
?>