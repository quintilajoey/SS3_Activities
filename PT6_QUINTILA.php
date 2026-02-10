<!DOCTYPE html>
<html>
    <head>
        <title>PT1</title>        
      <style>
        body{
            background-color: white;
            color: black;
        }
        h1{
            font-weight: strong;
            color: green;
            text-shadow: darkgreen 2px 2px 2px;
        }
        h2{
            color: gray;
            text-shadow: darkgrey 2px 2px 2px;
        }
        table {
            background-color:white;
            border-collapse: collapse;
            text-align: center;
            margin: 20px auto;
        }
        th{
            border: 1px solid black;
            padding: 15px 12px;
            background-color: darkgrey;
            text-shadow: gray 1px 1px 1px;
        }
        .exp{color: red;}
        .est{color: blue;}
        .inc10{color: green;}
        .inc15{color: green;}
        .inc20{color: green;}
        td{
            border: 1px solid black;
            padding: 6px 12px;
            text-align: center;
            background-color: white;
        }
        .td{
            background-color: lightgrey;
            font-weight: bold;
            color: #FF8C00;
            text-shadow: darkgrey 2px 2px 2px;
        }
        .tot{
            color: white;
            font-weight: bold;
            background-color: green;
        }
        p{
            color: black;
            text-align: right;
            margin-right: 25%;
            font-weight: bold;
        }
      </style>
    </head>
<body>
<?php
    $Lumber = "150000";
    $Concrete = "78000";
    $Drywall = "69000";
    $Paint = "12000";
    $Miscellaneous = "20000";

function product($item, $increase){
  $product = $item * $increase;
  return $product;
}
$Lumbinc = product($Lumber,1.00);
$Lumbinc10 = product($Lumber,1.10);
$Lumbinc15 = product($Lumber,1.15);
$Lumbinc20 = product($Lumber,1.20);

$Concinc = product($Concrete,1.00);
$Concinc10 = product($Concrete,1.10);
$Concinc15 = product($Concrete,1.15);
$Concinc20 = product($Concrete,1.20);

$Dryinc = product($Drywall,1.00);
$Dryinc10 = product($Drywall,1.10);
$Dryinc15 = product($Drywall,1.15);
$Dryinc20 = product($Drywall,1.20);

$Paintinc = product($Paint,1.00);
$Paintinc10 = product($Paint,1.10);
$Paintinc15 = product($Paint,1.15);
$Paintinc20 = product($Paint,1.20);

$Miscinc = product($Miscellaneous,1.00);
$Miscinc10 = product($Miscellaneous,1.10);
$Miscinc15 = product($Miscellaneous,1.15);
$Miscinc20 = product($Miscellaneous,1.20);
  
$totest = $Lumbinc + $Concinc + $Dryinc + $Paintinc + $Miscinc; 
$totinc10 = $Lumbinc10 + $Concinc10 + $Dryinc10 + $Paintinc10 + $Miscinc10; 
$totinc15 = $Lumbinc15 + $Concinc15 + $Dryinc15 + $Paintinc15 + $Miscinc15; 
$totinc20 = $Lumbinc20 + $Concinc20 + $Dryinc20 + $Paintinc20 + $Miscinc20; 
    
?>
<center>
    <h1>Public Library Expansion Project</h1>
    <h2>Cost Estimates</h2>
<table>
    <tr>
        <th class="exp">Expenditures</th>
        <th class="est">Estimated cost</th>
        <th class="inc10">10% increase</th>
        <th class="inc15">15% increase</th>
        <th class="inc20">20% increase</th>
    </tr>
    <tr>
        <td class="td">Lumber</td>
        <td class="est"><?php echo "$$Lumbinc";?></td>
        <td class="inc10"><?php echo "$$Lumbinc10";?></td>
        <td class="inc15"><?php echo "$$Lumbinc15";?></td>
        <td class="inc20"><?php echo "$$Lumbinc20";?></td>
    </tr>
    <tr>
        <td class="td">Concrete</td>
        <td class="est"><?php echo "$$Concinc";?></td>
        <td class="inc10"><?php echo "$$Concinc10";?></td>
        <td class="inc15"><?php echo "$$Concinc15";?></td>
        <td class="inc20"><?php echo "$$Concinc20";?></td>
    </tr>
    <tr>
        <td class="td">Drywall</td>
        <td class="est"><?php echo "$$Dryinc";?></td>
        <td class="inc10"><?php echo "$$Dryinc10";?></td>
        <td class="inc15"><?php echo "$$Dryinc15";?></td>
        <td class="inc20"><?php echo "$$Dryinc20";?></td>
    </tr>
    <tr>
        <td class="td">Paint</td>
        <td class="est"><?php echo "$$Paintinc";?></td>
        <td class="inc10"><?php echo "$$Paintinc10";?></td>
        <td class="inc15"><?php echo "$$Paintinc15";?></td>
        <td class="inc20"><?php echo "$$Paintinc20";?></td>
    </tr>
    <tr>
        <td class="td">miscellaneous</td>
        <td class="est"><?php echo "$$Miscinc";?></td>
        <td class="inc10"><?php echo "$$Miscinc10";?></td>
        <td class="inc15"><?php echo "$$Miscinc15";?></td>
        <td class="inc20"><?php echo "$$Miscinc20";?></td>
    </tr>
    <tr>
        <td class="tot">Total<br>Expanditures:</td>
        <td class="tot"><?php echo "$$totest";?></td>
        <td class="tot"><?php echo "$$totinc10";?></td>
        <td class="tot"><?php echo "$$totinc15";?></td>
        <td class="tot"><?php echo "$$totinc20";?></td>
    </tr>
</table>
</center>
<p>Created by:Joey Quintila</p>
</body>
</html>

