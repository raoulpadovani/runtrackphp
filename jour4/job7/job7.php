<?php
    // Vérification si le formulaire a été soumis
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        // Récupération des valeurs des champs du formulaire
        $largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);

        // Vérification si les valeurs sont valides
        if ($largeur > 0 && $hauteur > 0) {
            // Affichage du toit de la maison
            for ($i = 0; $i < $hauteur; $i++) {
                echo str_repeat('&nbsp;', $hauteur - $i - 1);
                echo str_repeat('*', $i * 2 + 1);
                echo "<br>";
            }

            // Affichage du corps de la maison
            for ($i = 0; $i < $hauteur; $i++) {
                echo str_repeat('*', $largeur);
                echo "<br>";
            }
        } else {
            echo "Veuillez entrer des valeurs valides pour la largeur et la hauteur.";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Maison</title>
</head>
<body>
    <form action="job7.php" method="post">
        <label for="largeur">Largeur :</label>
        <input type="text" id="largeur" name="largeur"><br>
        <label for="hauteur">Hauteur :</label>
        <input type="text" id="hauteur" name="hauteur"><br>
        <input type="submit" value="Afficher la maison">
    </form>
</body>