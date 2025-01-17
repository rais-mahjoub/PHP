<form action="index.php" method="get">
    <input type="number" name="a">
    <input type="text" name="op">
    <input type="number" name="b">
    <button type="submit"> = </button>
</form>
<?php
    $a = $_GET["a"];
    $op = $_GET["op"];
    $b = $_GET["b"];

function calcule($a, $op, $b) {
    if ($op == "+") {
        return $a+$b;
    } elseif ($op == "-") {
        return $a-$b;
    } elseif ($op == "*") {
        return $a*$b;
    } elseif ($op == "/") {
        return $a/$b;
    } elseif ($op == "%") {
        return $a%$b;
    } elseif ($op == "**") {
        return $a**$b;
    } else {
        return "Merci de choisir un opérateur valide (+, -, *, /, %, **)";
    }
}

echo"$a $op $b = ".calcule($a, $op, $b);