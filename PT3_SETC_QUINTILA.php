
<?php

    $hourlyRate = 100;
    $hoursPerDay = 8;
    $daysPerMonth = 26;

    $netIncome = $hourlyRate * $hoursPerDay * $daysPerMonth;

    if ($netIncome <= 15000) {
        $tax = 0;
    }
    else if ($netIncome <= 30000) {
        $tax = ($netIncome - 15000) * 0.05;
    }

    echo $netIncome;

?>