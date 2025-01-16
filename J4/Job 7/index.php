<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dessiner une maison</title>
</head>
<body>
    <form method="post" action="">
        <label for="largeur">Largeur : </label>
        <input type="number" id="largeur" name="largeur" required>
        <br>
        <label for="hauteur">Hauteur : </label>
        <input type="number" id="hauteur" name="hauteur" required>
        <br>
        <input type="submit" value="Dessiner la maison">
    </form>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        $largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);
        
        for ($i = 0; $i < $largeur / 2; $i++) {
            for ($j = $largeur/2-1; $j > $i; $j--) {
                echo "<span style=\"font-family: consolas\">&nbsp;";
            }
            echo "/";
            for ($j = $largeur/2-$i; $j < $largeur/2; $j++) {
                echo "__";
            }
            echo "\</span><br>";
        }

        for ($i = 0; $i < $hauteur-1; $i++) {
            echo '<span style="font-family: consolas">|';
            for ($j = 0; $j < $largeur - 2; $j++) {
                echo "&nbsp;";
            }
            echo "|<br></span>";
        }

        echo'<span style="font-family: consolas">|</span>';
        for ($i = 0; $i < $largeur - 2; $i++) {
            echo '<span style="font-family: consolas">_</span>';
        }
        echo'<span style="font-family: consolas">|</span>';
    }
    ?>
</body>
</html>
