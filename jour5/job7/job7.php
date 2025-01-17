<?php
    // Fonction pour mettre les mots commençant par une majuscule en gras
    function mettreEnGras($str) {
        return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
    }

    // Fonction pour appliquer le chiffrement de César
    function cesar($str, $decalage = 2) {
        $resultat = '';
        $decalage = $decalage % 26;
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $code = ord($char);
                if (ctype_upper($char)) {
                    $char = chr((($code - 65 + $decalage) % 26) + 65);
                } else {
                    $char = chr((($code - 97 + $decalage) % 26) + 97);
                }
            }
            $resultat .= $char;
        }
        return $resultat;
    }

    // Fonction pour afficher "_" aux mots finissant par "me"
    function plateforme($str) {
        return preg_replace('/\b(\w*me)\b/', '$1_', $str);
    }

    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = htmlspecialchars($_POST['str']);
        $transformation = $_POST['transformation'];

        switch ($transformation) {
            case 'gras':
                echo mettreEnGras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
            default:
                echo "Transformation non valide.";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Transformation</title>
</head>
<body>
    <form action="job7.php" method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str"><br>
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br>
        <input type="submit" value="Appliquer">
    </form>
</body>
</html>