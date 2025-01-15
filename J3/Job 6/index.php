<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";
for ($i = -1; isset($str[$i]); $i--) {
    echo $str[$i];
}