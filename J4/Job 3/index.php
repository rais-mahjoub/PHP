<?php
    $nbe = 0;
    if (isset($_POST)) {
        foreach ($_POST as $key => $value) {
            $nbe++;
        }
        echo $nbe;
    }
?>
<form action="index.php" method="post">
    <label for="nom">Nom : </label>
    <input type="text" name="nom"><br>

    <label for="prénom">Prénom : </label>
    <input type="text" name="prénom">

    <input type="submit" value="Envoyer">
</form>