<?php
// Création d'un tableau contenant les nombres spécifiés
$tableau = array(200, 204, 173, 98, 171, 404, 459);

// Début de la table HTML
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Parité</th></tr>";

// Parcours du tableau et affichage si le nombre est pair ou impair
foreach ($tableau as $nombre) {
    echo "<tr>";
    echo "<td>$nombre</td>";
    if ($nombre % 2 == 0) {
        echo "<td>paire</td>";
    } else {
        echo "<td>impaire</td>";
    }
    echo "</tr>";
}
// Fin de la table HTML
echo "</table>";
    