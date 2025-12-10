<html lang="en">
<head>
    <title></title>
</head>
<body>

<?php
$items = [
    ["Lumber", 190000],
    ["Concrete", 78000],
    ["Drywall", 56000],
    ["Paint", 25000],
    ["Miscellaneous", 20000]
];

function money($v){
    return "$" . number_format($v, 2);
}

$tot_est = $tot10 = $tot15 = $tot20 = 0;
?>

<h1>Public Library Expansion Project</h1>
<h3>Cost Estimates</h3>

<table>
    <tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>

    <?php foreach($items as $row): 
        $est = $row[1];
        $inc10 = $est * 1.10;
        $inc15 = $est * 1.15;
        $inc20 = $est * 1.20;

        $tot_est += $est;
        $tot10 += $inc10;
        $tot15 += $inc15;
        $tot20 += $inc20;
    ?>


    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>
</body>
</html>
