<?php
function getMissingVar()
{
    if ($_POST['submit'])
    {
        $missing[] = null;
        $s = $_POST['s'];
        $v = $_POST['v'];
        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];

        if (!is_numeric($s) || !is_numeric($v) || !is_numeric($f1) || !is_numeric($f2))
            return "Error";
        if ($s == "")
            array_push($missing, "s");
        if ($v == "")
            array_push($missing, "v");
        if ($f1 == "")
            array_push($missing, "f1");
        if ($f2 == "")
            array_push($missing, "f2");

        if (count($missing) > 1)
        {
            return "Error";
        } else
            return $missing[0];
    }
}
function getVars()
{
    $vars[] = null;
    if($_POST['submit'])
    {
        array_push($vars,$_POST['s']);
        array_push($vars,$_POST['t']);
        array_push($vars,$_POST['v']);
        array_push($vars,$_POST['f1']);
        array_push($vars,$_POST['f2']);
        return $vars;
    }
}
function solveF1($s, $v, $f2, $dir)
{
    if($s == 0 || $s+ $v == 0)
        return "Error";
    if($dir == "away")
        return ($f2 * ($s + $v))/$s;
    else
        return ($f2 * ($s - $v))/$s;

}
function solveF2($s, $v, $f1, $dir)
{
    if($s + $v == 0)
        return "Error";
    if($dir == "away")
        return ($f1 * $s)/($s + $v);
    else
        return ($f1 * $s)/($s - $v);

}
function solveS($v, $f1, $f2, $dir)
{
    if($f1 == $f2 || $f1 * v ==0)
        return "Error";
    if($dir == "away")
        return ($f2 * $v)/($f1 - $f2);
    else
        return ($f2 * $v)/($f2 - $f1);
}
function solveV($s, $f1, $f2, $dir)
{
    if($f2 == 0 || $f1 * $s == 0)
        return "Error";
    if($dir == "away")
        return (($f1/$f2) -1) * $s;
    else
        return $s -(($f1/$f2) *$s);
}
function solveT($s)
{
    return (5 * ($s - 332) / 3);
}
function solve()
{
    if(!$_POST['submit'])
        return null;

    if(getMissingVar() == "Error")
        return "Error: Too many undefined variables or invalid inputted variables";

    $s = $_POST['s'];
    $v = $_POST['v'];
    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];
    $dir = $_POST['dir'];

    if(getMissingVar() == "s")
        $s = solveS($v, $f1, $f2, $dir);
    if(getMissingVar() == "f1")
        $f1 = solveF1($s, $v, $f2, $dir);
    if(getMissingVar() == "v")
        $v = solveV($s, $f1, $f2, $dir);
    if(getMissingVar() == "f2")
        return solveF2($s, $v, $f1, $dir);

    if($s == "Error" ||
        $v == "Error" ||
        $f1 == "Error" ||
        $f2 == "Error")
        return "Error: Invalid numbers inputted.  Please check your inputs";

    return solveF2($s, $v, $f1, $dir);
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
</head>
<body>
<!-- main content -->
<h1>Performance Task - Square vs Squared</h1>
<h2>Calculate the square and square root of an inputted number range.</h2>

<form name="form" action="doppler-effect-calculator.php" method="post">
    <b>Speed of sound in m/s</b><br />
    <input type="text" name="s" value=""/>
    <b> OR Input the Air temperature in degrees Celsius </b>
    <input type="text" name="t" value=""/><br/>
    <b>Speed of object in m/s</b><br />
    <input type="text" name="v" value=""><br/>
    <b>Emitting Frequency in Hz</b><br />
    <input type="text" name="f1" value=""><br/>
    <b>Perceived Frequency</b><br />
    <input type="text" name="f2" value=""><br/>
    <b>Direction</b><br />
    <input type="radio" name="dir" value="to" required/>Towards you<br />
    <input type="radio" name="dir" value="away" required/>Away from you<br />
    <input type="submit" value="Calculate" name="submit"/><br/>
</form>
<h3>Perceived Frequency:</h3>
<h4>
<?php
    if($_POST['submit'])
    echo solve();
?>
</h4>
<h3>Air Temperature</h3>
<h4>
<?php
    if($_POST['submit'])
        if($_POST['s'])
            echo solveT(getVars()[0]);
        else
            echo getVars()[1];

?>
</h4>

</body>
</html>
