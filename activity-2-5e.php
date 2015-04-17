<?php

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity 2.5e</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.5e</h1>
<p>Do While loops part 2</p>
<form name="form1" action="activity-2-5e.php" method="post">
    <label>Starting Temperature in Celsius</label><br/>
    <input type="number" name="degreeCStart" value="" placeholder="" required/><br/>
    <label>Ending Temperature in Celsius</label><br/>
    <input type="number" name="degreeCEnd" value="" placeholder="" required/><br/>
    <input type="submit" name="subButton" value="Send"/><br/>
</form>
<?php
if($_POST['subButton'])
{
    $degreeC = $_POST['degreeCStart'];
    $end = $_POST['degreeCEnd'];
}
if($end > $degreeC)
{
    echo "ERROR: End Value is greater than starting value";
}
else if($degreeC == "" OR $end == "")
{
    // This should theoretically never happen due to the required argument in the form itself.
    echo "ERROR: Empty value - Please fill in all fields.";
}
else
{

    $degreeK = $degreeC + 273;
    $degreeF = 1.8 * $degreeC + 32;

    echo "<table style=\"width:100%\">" . "<tr><td><b>Degrees Celsius</b></td>" .
        "<td><b>Degrees Kelvin</b></td>" . "<td><b>Degrees Fahrenheit</b></td>";
    do {
        $degreeK = $degreeC + 273;
        $degreeF = 1.8 * $degreeC + 32;
        echo "<tr><td>" . $degreeC . "</td><td>" . $degreeK . "</td><td>" .
            $degreeF . "</td></tr>";
        $degreeC--;
    } while ($degreeC >= $end);
    echo "</table>";
}
?>
</body>
</html>
