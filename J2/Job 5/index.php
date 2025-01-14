<?php
echo"2<br>";
for ($n = 2; $n < 1000; $n++) {
    $tf = true;
    for ($i = 2; $i < ($n**0.5)+1; $i++) {
        if ($n % $i == 0) {
            $tf = false;
            break;
        }
    } 
    if ($tf == true) {
        echo"$n<br>";
    }
}