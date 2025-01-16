<?php
    if (isset($_GET)) {
        echo'<table style="text-align: center;"><tbody>';
        foreach ($_GET as $key => $value) {
            echo "<tr><th>". $key ."</th><td>". $value ."</td></tr>";
        }
        echo "</tbody></table>";
    }
?>
<form action="index.php" method="get">
    <label for="nom">Nom : </label>
    <input type="text" name="nom"><br>

    <label for="prénom">Prénom : </label>
    <input type="text" name="prénom">

    <input type="submit" value="Envoyer">
</form>