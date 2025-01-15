<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";
$n = -1;
for ($i = 0; isset($str[$i]); $i++) {
    $n++;
}
for ($i = 0; $i<$n; $i++) {
    echo $str[$i+1];
}
echo $str[0];