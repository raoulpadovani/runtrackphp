<?php
 // Définition de la chaîne de caractères
 $str = "Certaines choses changent, et d'autres ne changeront jamais.";

 // Création d'une nouvelle chaîne pour stocker le résultat
 $newStr = "";

 // Parcours de la chaîne et remplacement des caractères
 for ($i = 1; $i < strlen($str); $i++) {
     $newStr .= $str[$i];
 }
 // Ajout du premier caractère à la fin de la nouvelle chaîne
 $newStr .= $str[0];

 // Affichage de la nouvelle chaîne
 echo $newStr;



?>