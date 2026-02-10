<!DOCTYPE html>
<html>
    <head>
        <title>Library Cost Table</title>        
      <style>
        body{
            background-color: white;
            color: black;
        }
        h1{
            color: green;
            text-shadow: gray 2px 2px 2px;  
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
            color: orange;
            text-shadow: gray 2px 2px 2px;
        }
        .tot{
            color: white;
            font-weight: bold;
            background-color: green;
        }
        p{
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
    
    $inc10 = 1.10;
    $inc15 = 1.15;
    $inc20 = 1.20;
    
    $Lumbinc10 = $Lumber * $inc10;
    $Lumbinc15 = $Lumber * $inc15;
    $Lumbinc20 = $Lumber * $inc20;
    
    $Concinc10 = $Concrete * $inc10;
    $Concinc15 = $Concrete * $inc15;
    $Concinc20 = $Concrete * $inc20;
    
    $Dryinc10 = $Drywall * $inc10;
    $Dryinc15 = $Drywall * $inc15;
    $Dryinc20 = $Drywall * $inc20;
    
    $Paintinc10 = $Paint * $inc10;
    $Paintinc15 = $Paint * $inc15;
    $Paintinc20 = $Paint * $inc20;
    
    $Miscinc10 = $Miscellaneous * $inc10;
    $Miscinc15 = $Miscellaneous * $inc15;
    $Miscinc20 = $Miscellaneous * $inc20;
    
    $totest = $Lumber + $Concrete + $Drywall + $Paint + $Miscellaneous;
    $tot10 = $Lumbinc10 + $Concinc10 + $Dryinc10 + $Paintinc10 + $Miscinc10;
    $tot15 = $Lumbinc15 + $Concinc15 + $Dryinc15 + $Paintinc15 + $Miscinc15;
    $tot20 = $Lumbinc20 + $Concinc20 + $Dryinc20 + $Paintinc20 + $Miscinc20;
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
        <td class="est"><?php echo "$$Lumber";?></td>
        <td class="inc10"><?php echo "$$Lumbinc10";?></td>
        <td class="inc15"><?php echo "$$Lumbinc15";?></td>
        <td class="inc20"><?php echo "$$Lumbinc20";?></td>
    </tr>
    <tr>
        <td class="td">Concrete</td>
        <td class="est"><?php echo "$$Concrete";?></td>
        <td class="inc10"><?php echo "$$Concinc10";?></td>
        <td class="inc15"><?php echo "$$Concinc15";?></td>
        <td class="inc20"><?php echo "$$Concinc20";?></td>
    </tr>
    <tr>
        <td class="td">Drywall</td>
        <td class="est"><?php echo "$$Drywall";?></td>
        <td class="inc10"><?php echo "$$Dryinc10";?></td>
        <td class="inc15"><?php echo "$$Dryinc15";?></td>
        <td class="inc20"><?php echo "$$Dryinc20";?></td>
    </tr>
    <tr>
        <td class="td">Paint</td>
        <td class="est"><?php echo "$$Paint";?></td>
        <td class="inc10"><?php echo "$$Paintinc10";?></td>
        <td class="inc15"><?php echo "$$Paintinc15";?></td>
        <td class="inc20"><?php echo "$$Paintinc20";?></td>
    </tr>
    <tr>
        <td class="td">miscellaneous</td>
        <td class="est"><?php echo "$$Miscellaneous";?></td>
        <td class="inc10"><?php echo "$$Miscinc10";?></td>
        <td class="inc15"><?php echo "$$Miscinc15";?></td>
        <td class="inc20"><?php echo "$$Miscinc20";?></td>
    </tr>
    <tr>
        <td class="tot">Total<br>Expanditures:</td>
        <td class="tot"><?php echo "$$totest";?></td>
        <td class="tot"><?php echo "$$tot10";?></td>
        <td class="tot"><?php echo "$$tot15";?></td>
        <td class="tot"><?php echo "$$tot20";?></td>
    </tr>
</table>
</center>
<p>Created by:Joey Quintila</p>
</body>
</html>
