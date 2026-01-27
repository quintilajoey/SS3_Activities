<?php
echo "
<style>
    body {
    font-family: Arial;
}
    table {
    border-collapse: collapse;
    margin: 20px auto;
}
    th, td {
    border: 1px solid black;
    padding: 6px 12px;
    text-align: center;
}
</style>";
echo "<center>";
echo "Prime Classification with Factor Counting";
echo "<table>";
echo "<tr>
        <th>Number</th>
        <th>Result</th>
      </tr>";

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
        echo "<tr><td>$num</td><td>Prime</td></tr>";
        $prime++;
    } else {
        echo "<tr><td>$num</td><td>Not Prime ($factors factors)</td></tr>";
        $notPrime++;
    }
}

echo "</table>";

echo "<table>";
echo "<br>Summary<br>";
echo "Total Prime Numbers: " . $prime . "<br>";
echo "Total Non-Prime Numbers: " . $notPrime . "<br>";
echo "</table>";

echo "<center>";
?>

