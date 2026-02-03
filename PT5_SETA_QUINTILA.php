
<!DOCTYPE html>
<html>
<head>
  <title>Grade Calculator</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #025973;
            color:black;
        }
        .container{
            width:420px;
            margin:40px auto;
            background:white;
            padding:25px;
            border-radius:10px;
        }
        label{
            display:inline-block;
            width:160px;
            margin-bottom:10px;
        }
        input {
            width: 120px;
        }
        button{
            margin-top:15px;
            padding:8px 16px;
            background:blue;
            color:white;
            border-radius:5px;
            border:none;
        }
        button:hover{
            background:blue;
            box-shadow: black 2px 2px 3px;
            
       }
        .result{
            margin-top:25px;
            padding-top:15px;
            border-top:1px solid #ccc;
        }
        .result p{
            font-size:16px;
        }
        .passed{ color:green; font-weight:bold; }
        .failed{ color:red; font-weight:bold; }
    </style>
</head>
<body>
<div class="container">
<form method="POST">
    <fieldset>
        <legend><b>Grade Calculator</b></legend>
        <label>1st Quarter Grade:</label>
        <input type="number" name="q1" placeholder="Enter your Grade" min="70" max="99" step="0.01" required><br>

        <label>2nd Quarter Grade:</label>
        <input type="number" name="q2" placeholder="Enter your Grade" min="70" max="99" step="0.01" required><br>
        
        <label>3rd Quarter Grade:</label>
        <input type="number" name="q3" placeholder="Enter your Grade" min="70" max="99" step="0.01" required><br>

        <label>4th Quarter Grade:</label>
        <input type="number" name="q4" placeholder="Enter your Grade" min="70" max="99" step="0.01" required><br>

       <button type="submit" name="calc">Calculate</button>
    </fieldset>
</form>

<?php
if(isset($_POST['calc'])){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];

    $avg = ($q1 + $q2 + $q3 + $q4) / 4;

    if($avg >= 90){
        $desc = "Outstanding";
        $rem = "Passed";
        $class = "passed";
    }
    elseif($avg >= 85){
        $desc = "Very Satisfactory";
        $rem = "Passed";
    }
    elseif($avg >= 80){
        $desc = "Satisfactory";
        $rem = "Passed";
        $class = "passed";
    }
    elseif($avg >= 75){
        $desc = "Fairly Satisfactory";
        $rem = "Passed";
        $class = "passed";
    }
    else{
        $desc = "Did Not Meet Expectations";
        $rem = "Failed";
        $class = "failed";
    }

    echo "<div class='result'>";
    echo "Average Grade: " . number_format($avg,2) . "<br>";
    echo "Description: $desc<br>";
    echo "Remarks: $rem";
    echo "</div>";
}
?></div></body>
</html>