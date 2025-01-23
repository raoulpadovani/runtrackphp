<?php
session_start();

// Gestion du formulaire
if (isset($_POST['reset'])) {
    // Réinitialiser la liste des prénoms
    $_SESSION['prenoms'] = [];
} elseif (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom à la liste des prénoms
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Affichage des prénoms
if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    echo "Liste des prénoms :<br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo htmlspecialchars($prenom) . "<br>";
    }
}
?>

<!-- Formulaire pour ajouter un prénom -->
<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom" required>
    <button type="submit">Ajouter</button>
</form>

<!-- Formulaire pour réinitialiser la liste -->
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>