<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="ICS3UO Web Development Site">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<!-- main content -->
<h1>Performance Task - Gas Mileage</h1>
<h2>Calculate the performance of a car based upon Litres of gas used, and distance driven</h2>
<p>Usage: Input the number of litres consumed, Input the number of kilometers travelled on that volume.</p>
<img src="http://hostedmedia.reimanpub.com/TFH/Projects/FH071610_005_SAVGAS_01.jpg"><br/>
<form name="form" action="perftask-gas-mileage.php" method="post">
    <b>Litres</b><br />
    <input type="text" name="litres" value="" required/><br />
    <b>Distance driven in KM's</b><br />
    <input type="text" name="distance" value="" required><br/>
    <input type="submit" value="Calculate" name="submit"/><br/>
</form>

<?php
if($_POST['submit'])
{
    $litres = $_POST['litres'];
    $kilometers =  $_POST['distance'];

    if(is_numeric($litres) || is_numeric($kilometers))
    {
        if($litres == 0 || $kilometers == 0)
        {
            echo "<h3 style='color: red;'>Error: You cannot have an input as 0</h3>";
            return;
        }
        echo "<h3 style='color: green;'>Your mileage is: " . calcEfficiency($litres, $kilometers) . " L/100 km</h3>";
        echo "<h3>" . checkEfficiency(calcEfficiency($litres,$kilometers)) . "</h3>";
    }
    else
    {
        echo "<h3 style='color: red;'>Error: You must input a number.</h3>";
        return;
    }
}

function calcEfficiency($litres, $kilometers)
{
    return ($litres/$kilometers) * 100;
}
function checkEfficiency($eff)
{
    if($eff > 0 && $eff < 4)
    {
        return "Near perfect performance! This is among the top in the world!";
    }
    else if($eff >= 4 && $eff < 6)
    {
        return "Amazing performance, this car will last a very long time.";
    }
    else if($eff >= 6 && $eff < 8)
    {
        return "Good performance, this should last for a few more years.";
    }
    else if($eff >= 8 && $eff < 12)
    {
        return "Decent performance, make sure that you keep your engine in check.";
    }
    else if($eff >= 12 && $eff < 15)
    {
        return "Poor performance, you shouldn't be doing long roadtrips.";
    }
    else if($eff >= 15 && $eff < 20)
    {
        return "Very Poor performance, consider getting a new car.";
    }
    else if($eff >= 20)
    {
        return "How... You need an upgrade from the 1960's... Seriously, get a new car.";
    }
    else
    {
        return "Invalid MPG.";
    }
}
?>

<object data="http://oee.nrcan.gc.ca/transportation/tools/fuelratings/FCG2013_e.pdf" type="application/pdf" width="100%" height="100%">

<p>No PDF plugin detected. Please either install one or stop using IE.
    <a href="http://oee.nrcan.gc.ca/transportation/tools/fuelratings/FCG2013_e.pdf">Click here to
        download the PDF file.</a></p>
</object>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
