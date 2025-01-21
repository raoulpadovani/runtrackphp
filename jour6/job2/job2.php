<?php
    // Fonction bubblesort
    function bubblesort($tab, $croissant) {
        $n = count($tab);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($croissant) {
                    if ($tab[$j] > $tab[$j + 1]) {
                        // Échange des éléments
                        $temp = $tab[$j];
                        $tab[$j] = $tab[$j + 1];
                        $tab[$j + 1] = $temp;
                    }
                } else {
                    if ($tab[$j] < $tab[$j + 1]) {
                        // Échange des éléments
                        $temp = $tab[$j];
                        $tab[$j] = $tab[$j + 1];
                        $tab[$j + 1] = $temp;
                    }
                }
            }
        }
        return $tab;
    }

    // Exemple d'utilisation de la fonction bubblesort
    $tab = ["abc", "ghi", "def"];
    $croissant = true;
    $resultat = bubblesort($tab, $croissant);
    echo "Tableau trié par ordre croissant : " . implode(", ", $resultat) . "<br>";

    $croissant = false;
    $resultat = bubblesort($tab, $croissant);
    echo "Tableau trié par ordre décroissant : " . implode(", ", $resultat) . "<br>";
?>