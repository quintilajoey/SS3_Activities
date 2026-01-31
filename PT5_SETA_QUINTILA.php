
<!DOCTYPE html>

<html>
<head>
  <title>Grade Calculator</title>
</head>
<body>
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
    </fieldset><br>

       <button type="submit" name="calculate">Calculate</button>
</form>
</body>
</html>
