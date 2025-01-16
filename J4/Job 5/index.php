<?php
    if (isset($_POST)) {
        if ($_POST["username"]=="John" && $_POST["password"]== "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
?>
<form action="index.php" method="post">
    <label for="username">Username : </label>
    <input type="text" name="username"><br>

    <label for="password">Password : </label>
    <input type="text" name="password">

    <input type="submit" value="Envoyer">
</form>