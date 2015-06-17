<?php
function calcForce($m,$a)
{
    return $m * $a;
}
function calcAcc($f, $m)
{
    if($m == 0) return "Error: Nice try, no first derivatives for you. Fix your numbers.";
    return $f/$m;
}
function calcMass($a, $f)
{
    if($a == 0) return "Error: Nice try, no first derivatives for you. Fix your numbers.";
    return $f/$a;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="ICS3UO Web Development Site">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/3/39/GodfreyKneller-IsaacNewton-1689.jpg); opacity: 30; font-family: 'Arizonia', cursive; color: white; font-size: larger;">
<h1>Newton’s Second Law</h1>
<p>Newton’s second law is a mathematical relationship between the force, mass and acceleration of an object.  In this activity you will calculate the force required to accelerate a mass.</p>
<form action="exam-q8.php" name="form" method="post">
    <label>Mass (kg)</label><br/>
    <input type="text" name="mass" value=""><br/>
    <label>Acceleration</label><br/>
    <input type="text" name="acc" value=""><br>
    <label>Force</label><br/>
    <input type="text" name="for" value=""><br>
    <input type="submit" value="Submit" name="sub"><br/>
</form>
<h3>
<?php
if($_POST['sub'])
{
    $a = $_POST['acc'];
    $m = $_POST['mass'];
    $f = $_POST['for'];
    $missing = "";
    // A is missing
    if($a == "" && $m !== "" && $f !== "")
        $missing = "a";
    // Nothing is missing
    else if($a !== "" && $m !== "" && $f !== "")
        $missing = "none";
    // M Is missing
    else if($a !== "" && $m == "" && $f !== "")
        $missing = "m";
    // F is missing
    else if($a !== "" && $m !== "" && $f == "")
        $missing = "a";
    // >1 is missing
    else
        $missing = "toomany";

    switch($missing)
    {
        case "a":
            $a = calcAcc($f, $m);
            break;
        case "m":
            $m = calcMass($a, $f);
            break;
        case "f":
            $f = calcForce($m, $a);
            break;
        case "toomany":
            echo "Too many missing variables";
            return;
        case "none":
            break;
    }
    echo "When a force of " . calcForce($m, $a) . " is applied to a " . calcMass($a, $f)." kg object it will accelerate at " . calcAcc($f, $m) ."  m/s/s.";
}
?>
</h3>
<h3><a href="http://www.biography.com/people/isaac-newton-9422656" style="color: white;">Sir Issac Newton's Biography</a></h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/nO7XeYPi2FU" frameborder="0" allowfullscreen></iframe>
</body>
</html>