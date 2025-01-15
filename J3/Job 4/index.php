<?php
$str = "Dans l'espace, personne ne vous entend crier";
$n = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $n++;
}
echo $n;