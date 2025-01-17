<form action="index.php" method="post">
    <label for="str">String : </label>
    <input type="text" name="str">

    <label for="choix">Méthode : </label>
    <select name="choix">
        <option value="gras"><b>Gras</b></option>
        <option value="césar">César</option>
        <option value="plateforme">Plateforme_</option>
    </select>
    <input type="submit" value="Transmormer">
</form>
<?php
$str = $_POST["str"];
$choix = $_POST["choix"];
function transform($str, $choix) {
    if ($choix == "gras") {// ----------------------------------- WORKS
        $maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
        $mot = "";
        $nvStr = "";
        $lenStr = 0;
        for ($i = 0; isset($str[$i]); $i++) {
            $lenStr++;
        }
        for ($i = 0; isset($str[$i]); $i++) {
            $haveMaj = false;
            if ($str[$i] != " ") {
                $mot .= $str[$i];
            } 
            if ($str[$i] == " " or $i == $lenStr - 1) {
                for ($j = 0; isset($maj[$j]); $j++) {
                    if ($mot[0] == $maj[$j]) {
                        $nvStr .= "<b>$mot</b> ";
                        $haveMaj = true;
                    }
                }
                if ($haveMaj == false) {
                    $nvStr .= $mot." ";
                }
                $mot = "";
            }
        }
        return $nvStr;
    } else if ($choix == "césar") {// --------------------------- WORKS
        $nvStr = "";
        $decalChar = "abcdefghijklmnopqrstuvwxyzabABCDEFGHIJKLMNOPQRSTUVWXYZAB";
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] != " ") {
                for ($j = 0; isset($decalChar[$j]); $j++) {
                    if ($decalChar[$j] == $str[$i]) {
                        $nvStr .= $decalChar[$j+2];
                        break;
                    }
                }
            } else {
                $nvStr .= $str[$i];
            }
        }
        return $nvStr;
    } else if ($choix == "plateforme") {// ---------------------- WORKS
        $mot = "";
        $nvStr = "";
        $lenStr = 0;
        for ($i = 0; isset($str[$i]); $i++) {
            $lenStr++;
        }
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] != " ") {
                $mot .= $str[$i];
            } 
            if ($str[$i] == " " or $i == $lenStr - 1) {
                $lenMot = 0;
                for ($j = 0; isset($mot[$j]); $j++) {
                    $lenMot ++;
                }
                if ($mot[$lenMot-2] == "m" && $mot[$lenMot-1] == "e") {
                    $nvStr .= $mot."_ ";
                } else {
                    $nvStr .= $mot." ";
                }
                $mot = "";
            }
        }
        return $nvStr;
    }
}

echo transform($str, $choix);