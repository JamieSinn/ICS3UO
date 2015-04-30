<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jamie
 * Date: 4/30/2015
 * Time: 4:51 PM
 */
function getTerminalVelocity($mass, $dragcoeff, $area)
{
    return sqrt((19.6*$mass) / ($dragcoeff * 1.229 * $area));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Terminal Velocity Calculator</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>I probably should pull my parachute now...</h1>

<form name="form1" action="activity-2-6c-terminal-velocity.php" method="post">
    <label>Mass of the said object, in KG</label><br/>
    <input type="number" name="mass" value="" placeholder="" required/><br/>
    <label>Area of said object, in Metres squared</label><br/>
    <input type="number" name="area" value="" placeholder="" required/><br/>
    <label>Object shape</label><br/>
    <select name="shape">
        <option value="plate">Flat Plate</option>
        <option value="prism">Prism</option>
        <option value="bullet">Bullet</option>
        <option value="sphere">Sphere</option>
        <option value="airfoil">Air Foil</option>
    </select><br/>

    <input type="submit" name="subButton" value="Send"/><br/>
</form>

<?
if($_POST['subButton'])
{
    $mass = $_POST['mass'];
    $area = $_POST['area'];
    $drag = $_POST['shape'];
    $dragcoeff = 0;
    switch($drag)
    {
        case "plate":
            $dragcoeff = 1.28;
            break;
        case "prism":
            $dragcoeff = 1.14;
            break;
        case "bullet":
            $dragcoeff = 0.3;
            break;
        case "sphere":
            $dragcoeff = 0.1;
            break;
        case "airfoil":
            $dragcoeff = 0.05;
            break;
    }

    echo "<h3>Calculated Velocity is: </h3><br/>";
    echo "<h4>" . getTerminalVelocity($mass, $dragcoeff, $area) . " metres per second is the terminal velocity.</h4><br/>";
}
?>
</body>
</html>
