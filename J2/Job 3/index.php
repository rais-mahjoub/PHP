<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo"La Plateforme_";
    } else if ($i <= 20) {
        echo "<i>$i</i>";
    } else if ($i >= 25 and $i <= 50) {
        echo "<u>$i</u>";
    } else {
        echo "$i";
    }
    echo"<br>";
}