<?php
echo "
<style>
    body {
    font-family: Arial;
    background-color: #025973;
    color: white;
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

echo "<body>";
echo "<center>";
echo "<h2>Prime Classification with Factor Counting</h2>";
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
        echo "<tr><td>$num</td><td>Not Prime $factors factors</td></tr>";
        $notPrime++;
    }
}
echo "</table>";

echo "<table>";
echo "<tr>
        <th colspan='2'>Summary</th>
    </tr>";
echo "<tr>
        <td>Total Prime Numbers</td>
        <td>$prime</td>
    </tr>";
echo "<tr>
        <td>Total Non-Prime Numbers</td>
        <td>$notPrime</td>
    </tr>";
echo "</table>";
echo "</center>";
echo "</body>";
?>
