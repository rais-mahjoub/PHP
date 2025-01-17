<form action="index.php" method="get">
    <input type="number" name="a">
    <input type="text" name="op">
    <input type="number" name="b">
    <button type="submit"> = </button>
</form>
<?php
function calcule($_GET) {
    $a = $_GET["a"];
    $op = $_GET["op"];
    $b = $_GET["b"];
    if ($op == "+") {
        return $a+$b;
    }
}