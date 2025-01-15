<?php
// Your PHP code goes here

    $str ="On n est pas le meilleur quand
    on le croit mais quand on le sait”. Créez un dictionnaire nommé dic qui a
    comme keys “consonnes” et “voyelles".
    $compteur =0;
    $dic = array("consonnes" => 0, "voyelles" => 0);
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y" || $str[$i] == "A" || $str[$i] == "E" || $str[$i] == "I" || $str[$i] == "O" || $str[$i] == "U" || $str[$i] == "Y") {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    } 
    echo "Il y a " . $dic["voyelles"] . " voyelles et " . $dic["consonnes"] . " consonnes dans la phrase.";
    
    
    



?>