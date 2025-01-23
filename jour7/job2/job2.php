<?php
// Gestion du cookie "nbvisites"
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600); // Réinitialiser le cookie
    $_COOKIE['nbvisites'] = 0; // Mettre à jour la valeur du cookie dans $_COOKIE
} else {
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    setcookie('nbvisites', $nbvisites, time() + 3600); // Mettre à jour le cookie
    $_COOKIE['nbvisites'] = $nbvisites; // Mettre à jour la valeur du cookie dans $_COOKIE
}

// Affichage du contenu du cookie
echo "Nombre de visites : " . $_COOKIE['nbvisites'] . "<br>";
?>

<!-- Formulaire pour le bouton reset -->
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>