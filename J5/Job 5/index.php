<form action="index.php" method="get">
    <label for="str">String : </label>
    <input type="text" name="str"><br>

    <label for="char">Char : </label>
    <input type="text" name="char">

    <input type="submit" value="Compter">
</form>
<?php
$str = $_GET["str"];
$char = $_GET["char"];

function occurences($str, $char) {
    $occ = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $char) {
            $occ++;
        }
    }
    return $occ;
}

echo occurences($str, $char);