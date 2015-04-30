<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jamie
 * Date: 4/30/2015
 * Time: 4:17 PM
 */
function sphereVolume($r)
{
    return 4 * (pi() * pow($r, 3)) / 3;
}

function coneVolume($rad, $height)
{
    return ($height * pi() * pow($rad, 2)) / 3;
}

function iceCreamConeVolume($r, $height)
{
    return (sphereVolume($r) / 2) + coneVolume($r, $height);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Cone Calculator</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>I Scream, you scream, we all scream for ICE CREAM</h1>

<form name="form1" action="activity-2-6b-ice-cream-cone.php" method="post">
    <label>Diameter of the scoop - in CM</label><br/>
    <input type="number" name="diameter" value="" placeholder="" required/><br/>
    <label>Height of the cone also in CM</label><br/>
    <input type="number" name="height" value="" placeholder="" required/><br/>
    <input type="submit" name="subButton" value="Send"/><br/>
</form>
<img src="http://www.math.hope.edu/newsletter/2012-13/ice-cream-cone.png"/><br/>
<p>See above image to see how the volume is calculated. The scoop size is halved, then the volume of the cone is added.</p><br/>

<?
    if($_POST['subButton'])
    {
        $rad = $_POST['diameter']/2;
        $height = $_POST['height'];

        echo "<h3>Calculated Volume is: </h3><br/>";
        echo "<h4>" . iceCreamConeVolume($rad, $height) . " CM cubed is the maximum possible volume of ice cream.</h4><br/>";
    }
?>
</body>
</html>