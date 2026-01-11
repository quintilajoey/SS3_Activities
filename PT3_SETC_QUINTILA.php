
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
    else {
        $tax = (15000 * 0.05) + (($netIncome - 30000) * 0.10);
    }


    $incomeAfterTax = $netIncome - $tax;

    echo "Hourly Rate: $" . $hourlyRate . "<br>";
    echo "Monthly Net Income: $" . $netIncome . "<br>";
    echo "Tax: $" . $tax . "<br>";
    echo "Income After Tax: $" . $incomeAfterTax;

    echo "
    <body>
        <table border='1' cellpadding='10' cellspacing='0' style='margin:auto; background-color:white;'>
            <tr>
                <th>Employee Salary Report</th>
            </tr>
            
            <tr>
                <td>Hourly Rate</td>
                <td>$hourlyRate</td>
            </tr>
            
            <tr>
                <td>Monthly Net Income</td>
                <td>$$netIncome</td>
            </tr>
            
            <tr>
                <td>Tax</td>
                <td>$$tax</td>
            </tr>
            
            <tr>
                <th>Income After Tax</th>
                <td>incomeAfterTax</td>
            </tr>            
        </table>
    </body>

    ";



?>