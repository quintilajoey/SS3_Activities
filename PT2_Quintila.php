<html lang="en">
<head>
    <title>Library Cost Table</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f2f2f2; }
        table { border-collapse: collapse; width: 70%; background: white; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #e2e2e2; }
        tr:nth-child(even){ background: #fafafa; }
        .left { text-align: left; }
    </style>
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
    <?php endforeach; ?>
    <tr>
        <th class="left">Total Expenditures:</th>
        <td><?= money($est) ?></td>
        <td><?= money($inc10) ?></td>
        <td><?= money($inc15) ?></td>
        <td><?= money($inc20) ?></td>
    </tr>
    <tr>
        <th class="left">Total Expenditures:</th>
        <th><?= money($tot_est) ?></th>
        <th><?= money($tot10) ?></th>
        <th><?= money($tot15) ?></th>
        <th><?= money($tot20) ?></th>
    </tr>
<p>Created by: <b>Joey Quintila</b></p>
</table>
</body>
</html>
