<?php
$nbes = [200, 204, 173, 98, 171, 404, 459];
foreach ($nbes as $value) {
    if ($value%2==0) {
        echo "$value est pair <br>";
    } else if ($value%2== 1) {
        echo "$value est impair <br>";
    }
}