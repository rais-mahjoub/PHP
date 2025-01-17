<form action="index.php" method="get">
    <label for="str">String : </label>
    <input type="text" name="str"><br>

    <input type="submit" value="Traduire">
</form>
<?php
$str = $_GET["str"];
function translate( $str ) {
    $lat = "aAeEiIoOsStT";
    $leet ="443311005577";
    for ($i = 0;isset($str[$i]);$i++){
        for ($j = 0;isset($lat[$j]);$j++){
            if ($str[$i] == $lat[$j]) {
                $str[$i] = $leet[ $j ];
            }
        }
    }
    return $str;
}

echo translate($str);