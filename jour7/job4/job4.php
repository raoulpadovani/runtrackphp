<?php
// Gestion du formulaire de déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie
    $_COOKIE['prenom'] = ''; // Mettre à jour la valeur du cookie dans $_COOKIE
}

// Gestion du formulaire de connexion
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600); // Ajouter le prénom dans un cookie
    $_COOKIE['prenom'] = $_POST['prenom']; // Mettre à jour la valeur du cookie dans $_COOKIE
}

// Affichage du formulaire ou du message de bienvenue
if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !<br>";
    echo '<form method="post"><button type="submit" name="deco">Déconnexion</button></form>';
} else {
    echo '<form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
?>