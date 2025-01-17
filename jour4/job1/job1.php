<?php
    // Affichage du nombre d'arguments $_GET
    $nombreArguments = count($_GET);
    echo "Nombre d'arguments GET : " . $nombreArguments . "<br>";

    // Affichage des arguments et de leurs valeurs
    foreach ($_GET as $cle => $valeur) {
        echo "Clé : " . htmlspecialchars($cle) . " - Valeur : " . htmlspecialchars($valeur) . "<br>";
    }
?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="job1.php" method="get">
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