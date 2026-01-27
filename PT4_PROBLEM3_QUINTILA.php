<?php

echo "Prime Classification with Factor Counting";
$prime = 0;
$notPrime = 0;

for ($num = 1; $num <= 20; $num++) {

    $factors = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $factors++;
        }
    }

    if ($factors == 2) {
        echo $num . " - Prime<br>";
        $prime++;
    } else {
        echo $num . " - Not Prime (" . $factors . " factors)<br>";
        $notPrime++;
    }
}

echo "<br>Summary<br>";
echo "Total Prime Numbers: " . $prime . "<br>";
echo "Total Non-Prime Numbers: " . $notPrime . "<br>";

?>