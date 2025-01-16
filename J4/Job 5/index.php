<?php
    if (isset($_POST)) {
        if ($_POST["nom"]=="John" && $_POST["prénom"]== "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
?>
<form action="index.php" method="post">
    <label for="nom">Nom : </label>
    <input type="text" name="nom"><br>

    <label for="prénom">Prénom : </label>
    <input type="text" name="prénom">

    <input type="submit" value="Envoyer">
</form>