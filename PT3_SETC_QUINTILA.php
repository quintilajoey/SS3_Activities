
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
            <tr bgcolor='38b6c7'; style='color:white;'>
                <th colspan=2;>Employee Salary Report</th>
            </tr>
            
            <tr bgcolor='cbeef2'; style='color:black;'>
                <td>Hourly Rate</td>
                <td style='color:green;'><b>$$hourlyRate</b></td>
            </tr>
            
            <tr bgcolor='f2f9fa'; style='color:black;'>
                <td>Monthly Net Income</td>
                <td style='color:green;'><b>$$netIncome</b></td>
            </tr>
            
            <tr bgcolor='cbeef2'; style='color:black;'>
                <td>Tax</td>
                <td style='color:green;'><b>$$tax</b></td>
            </tr>
            
            <tr bgcolor='f2f9fa'; style='color:black;'>
                <td>Income After Tax</td>
                <td style='color:green;'><b>$$incomeAfterTax</b></td>
            </tr>            
        </table>
    </body>

    ";



?>