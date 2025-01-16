<form action="index.php" method="get">
    <label for="Nombre">Nombre : </label>
    <input type="text" name="Nombre">
    <input type="submit" value="Envoyer">
</form>
<?php
if (isset($_GET)) {
    if ($_GET["Nombre"]%2==0) {
        echo"Nombre pair";
    } else {
        echo "Nombre impair";
    }
}
?>