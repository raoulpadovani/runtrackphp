<?php
    // Définition de la fonction pour convertir en leet speak
    function convertirEnLeetSpeak($str) {
        // Tableau de correspondance pour leet speak
        $leet = array(
            'A' => '4', 'a' => '4',
            'B' => '13', 'b' => '13',
            'D' => '|)', 'd'=> '|)',
            'E' => '3', 'e' => '3',
            'G' => '6', 'g' => '6',
            'U' => '[_]', 'u' => '[_]',
            'L' => '1', 'l' => '1',
            'S' => '5', 's' => '5',
            'R' => '12', 'r' => '12',
            'T' => '7', 't' => '7',
            'O' => '0', 'o' => '0',
            'N' => '|\|', 'n' => '|\|',
            'M' => '|y|','m' => '|y|'
        );

        // Conversion de la chaîne en leet speak
        $strLeet = '';
        for ($i = 0; $i < strlen($str); $i++) {
            if (array_key_exists($str[$i], $leet)) {
                $strLeet .= $leet[$str[$i]];
            } else {
                $strLeet .= $str[$i];
            }
        }

        return $strLeet;
    }

    // Exemple d'utilisation de la fonction convertirEnLeetSpeak
    $str = "Bonjour tout le monde";
    $resultat = convertirEnLeetSpeak($str);
    echo "La chaîne convertie en leet speak est : " . $resultat;
?>