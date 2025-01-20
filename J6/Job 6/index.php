<?php
$style = $_GET["style"];
?>
<link rel="stylesheet" href="<?='./Styles/style'.$style.'.css'?>">
<form class="style">
    <label for="style">Choisissez un style :</label><br>
    <select class="style" name="style">
        <option value="1">Style 1</option>
        <option value="2">Style 2</option>
        <option value="3">Style 3</option>
    </select>
    <input type="submit" class="style" value="Appliquer">
</form>


