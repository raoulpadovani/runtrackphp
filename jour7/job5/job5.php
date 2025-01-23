<?php
session_start();

// Initialiser la grille et le joueur
if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['player'] = 'X';
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['player'] = 'X';
}

// Gérer les clics sur les boutons de la grille
if (isset($_POST['cell'])) {
    $cell = explode(',', $_POST['cell']);
    $row = $cell[0];
    $col = $cell[1];
    if ($_SESSION['grid'][$row][$col] == '-') {
        $_SESSION['grid'][$row][$col] = $_SESSION['player'];
        $_SESSION['player'] = $_SESSION['player'] == 'X' ? 'O' : 'X';
    }
}

// Vérifier si un joueur a gagné
function check_winner($grid) {
    // Vérifier les lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] != '-' && $grid[$i][0] == $grid[$i][1] && $grid[$i][1] == $grid[$i][2]) return $grid[$i][0];
        if ($grid[0][$i] != '-' && $grid[0][$i] == $grid[1][$i] && $grid[1][$i] == $grid[2][$i]) return $grid[0][$i];
    }
    if ($grid[0][0] != '-' && $grid[0][0] == $grid[1][1] && $grid[1][1] == $grid[2][2]) return $grid[0][0];
    if ($grid[0][2] != '-' && $grid[0][2] == $grid[1][1] && $grid[1][1] == $grid[2][0]) return $grid[0][2];
    return null;
}

$winner = check_winner($_SESSION['grid']);
if ($winner) {
    echo "$winner a gagné !";
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['player'] = 'X';
} elseif (!in_array('-', array_merge(...$_SESSION['grid']))) {
    echo "Match nul !";
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['player'] = 'X';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu du Morpion</title>
</head>
<body>
    <table border="1">
        <?php for ($row = 0; $row < 3; $row++): ?>
            <tr>
                <?php for ($col = 0; $col < 3; $col++): ?>
                    <td>
                        <form method="post" style="display:inline;">
                            <button type="submit" name="cell" value="<?php echo "$row,$col"; ?>" style="width:50px;height:50px;">
                                <?php echo $_SESSION['grid'][$row][$col]; ?>
                            </button>
                        </form>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>