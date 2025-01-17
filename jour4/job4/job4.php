<?php
    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Affichage du nombre d'arguments $_POST
        $nombreArguments = count($_POST);
        echo "Nombre d'arguments POST : " . $nombreArguments . "<br>";

        // Début du tableau HTML
        echo "<table border='1'>";
        echo "<tr><th>Clé</th><th>Valeur</th></tr>";

        // Affichage des arguments et de leurs valeurs dans le tableau
        foreach ($_POST as $cle => $valeur) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($cle) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }

        // Fin du tableau HTML
        echo "</table>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <form action="job4.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>