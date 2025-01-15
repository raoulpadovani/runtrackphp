<?php
// Your PHP code goes here

    $str = "Hello LaPlateforme!";
    echo $str;
    function estPremier($nombre) {
        if ($nombre < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($nombre); $i++) {
            if ($nombre % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Affichage des nombres premiers de 1 à 100
    for ($i = 1; $i <= 100; $i++) {
        if (estPremier($i)) {
            echo $i . "<br>";
        }
    }
    
    



?>