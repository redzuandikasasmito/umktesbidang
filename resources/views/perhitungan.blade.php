<?php
for ($i = 1; $i <= 200; $i++) {
    if ($i % 8 == 0) {
        echo "$i: Benar<br>";
    } elseif ($i % 4 == 0 || $i % 6 == 0) {
        echo "$i: Salah <br>";
    } else {
        echo "$i<br>";
    }
}
?>