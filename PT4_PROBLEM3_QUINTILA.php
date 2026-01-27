<?php

for ($num = 1; $num <= 20; $num++) {

    $factors = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $factors++;
        }
    }

    echo $num . " has " . $factors . " factors<br>";
}

?>