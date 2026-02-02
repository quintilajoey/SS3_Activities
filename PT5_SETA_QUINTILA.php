
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
        input[type="number"]{
            width:180px;
            padding:5px;
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

       <button type="submit" name="calculate">Calculate</button>
    </fieldset>
</form>

<?php
if(isset($_POST['calculate'])){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];

    $average = ($q1 + $q2 + $q3 + $q4) / 4;
    $averageFormatted = number_format($average, 2);

    if($average >= 90){
        $descriptor = "Outstanding";
        $remarks = "Passed";
        $class = "passed";
    } elseif($average >= 85){
        $descriptor = "Very Satisfactory";
        $remarks = "Passed";
        $class = "passed";
    } elseif($average >= 80){
        $descriptor = "Satisfactory";
        $remarks = "Passed";
        $class = "passed";
    } elseif($average >= 75){
        $descriptor = "Fairly Satisfactory";
        $remarks = "Passed";
        $class = "passed";
    } else {
        $descriptor = "Did Not Meet Expectations";
        $remarks = "Failed";
        $class = "failed";
    }

?>

</body>
</html>
