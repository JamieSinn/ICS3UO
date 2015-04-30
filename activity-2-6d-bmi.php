<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jamie
 * Date: 4/30/2015
 * Time: 5:12 PM
 */
function calculateBMI($height, $mass)
{
    return $mass/pow($height, 2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Body Mass Index Calculator</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Body mass index calculator</h1>

<form name="form1" action="activity-2-6d-bmi.php" method="post">
    <label>Your weight, in KG</label><br/>
    <input type="number" name="mass" value="" placeholder="" required/><br/>
    <label>Your height, in Metres</label><br/>
    <input type="number" name="height" value="" placeholder="" required/><br/>
    <input type="submit" name="subButton" value="Send"/><br/>
</form>

<?
if($_POST['subButton'])
{
    $mass = $_POST['mass'];
    $height = $_POST['height'];

    echo "<h3>Calculated BMI is: </h3><br/>";
    echo "<h4>" . calculateBMI($height, $mass) . " is your inputted BMI.</h4><br/>";
}
?>
</body>
</html>
