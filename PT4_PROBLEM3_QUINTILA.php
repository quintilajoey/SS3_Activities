<?php

for ($num = 1; $num <= 20; $num++) {

    $factors = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $factors++;
        }
    }

    if ($factors == 2) {
        echo $num . " - Prime<br>";
    } else {
        echo $num . " - Not Prime (" . $factors . " factors)<br>";
    }
}

?>