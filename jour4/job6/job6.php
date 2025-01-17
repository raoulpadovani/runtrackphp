<?php
    // Vérification si le formulaire a été soumis
    if (isset($_GET['nombre'])) {
        // Récupération de la valeur du champ du formulaire
        $nombre = htmlspecialchars($_GET['nombre']);

        // Vérification si la valeur est un nombre
        if (is_numeric($nombre)) {
            // Vérification de la parité du nombre
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="job6.php" method="get">
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="nombre"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>