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
    <input type="text" name="mass" value="" required><br/>
    <label>Acceleration (m/s/s)</label><br/>
    <input type="text" name="acc" value="" required><br>

    <input type="submit" value="Submit" name="sub"><br/>
</form>

<form action="exam-q8.php" name="form2" method="post">
    <label>Force (N)</label><br/>
    <input type="text" name="for2" value="" required><br/>
    <label>Acceleration (m/s/s)</label><br/>
    <input type="text" name="acc2" value="" required><br>

    <input type="submit" value="Submit" name="sub2"><br/>
</form>

<form action="exam-q8.php" name="form3" method="post">
    <label>Mass (kg)</label><br/>
    <input type="text" name="mass3" value="" required><br/>
    <label>Force (N)</label><br/>
    <input type="text" name="for3" value="" required><br>

    <input type="submit" value="Submit" name="sub3"><br/>
</form>
<h3>
<?php
if($_POST['sub'])
{
    $a = $_POST['acc'];
    $m = $_POST['mass'];
    echo "<p>When a force of " . calcForce($m, $a) . " is applied to a " . $m ." kg object it will accelerate at " . $a ."  m/s/s.</p>";

}
if($_POST['sub2'])
{
    $f2 = $_POST['for2'];
    $a2 = $_POST['acc2'];
    echo "<p>When a force of " . $f2 . " is applied to a " . calcMass($a2, $f2) ." kg object it will accelerate at " . $a2 ."  m/s/s.</p>";

}
if($_POST['sub3'])
{
    $f3 = $_POST['for3'];
    $m3 =$_POST['mass3'];
    echo "<p>When a force of " . $f3 . " is applied to a " . $m3 ." kg object it will accelerate at " . calcAcc($f3, $m3) ."  m/s/s.</p>";

}
?>
</h3>
<h3><a href="http://www.biography.com/people/isaac-newton-9422656" style="color: white;">Sir Issac Newton's Biography</a></h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/nO7XeYPi2FU" frameborder="0" allowfullscreen></iframe>
</body>
</html>