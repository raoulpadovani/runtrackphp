<?php
    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des valeurs des champs du formulaire
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Vérification des valeurs
        if ($username == "John" && $password == "Rambo") {
            echo "c’est pas ma guerre";
        } else {
            echo "votre pire cauchemar";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <form action="job5.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>