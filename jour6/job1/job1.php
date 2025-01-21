<?php
    // Vérification si le formulaire a été soumis
    if (isset($_POST['style'])) {
        $style = htmlspecialchars($_POST['style']);
    } else {
        $style = 'style1'; // Style par défaut
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec Styles</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $style; ?>.css">
</head>
<body>
    <form action="job1.php" method="post">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php if ($style == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style == 'style3') echo 'selected'; ?>>Style 3</option>
        </select><br>
        <input type="submit" value="Appliquer le style">
    </form>
</body>
</html>