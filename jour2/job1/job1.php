<?php
    // Affichage des nombres de 1 à 1337
    for ($i = 1; $i <= 1337; $i++) {
        if ($i == 42) {
            echo "<strong><u>$i</u></strong><br>";
        } else {
            echo $i . "<br>";
        }
    }
?>