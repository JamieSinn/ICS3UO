<?php
function calcVolume($L,$W,$H)
{
    // calculate the volume and return it
    return $L*$W*$H;
}

// call the function to calculate the volume (length,width,height)
function returnVolume($L,$W,$H)
{
    echo "The volume of the room is " . calcVolume($L,$W,$H) . " m<sup>3</sup>.";
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
<h1>Exam Question 4</h1>
<p>Issues: Invalid variables used inside the function.</p>
<p>Fix: Change the internal variables, or the inputted names to either L,W,H, or length,width,height</p>
<form action="exam-q4.php" method="get">
    <label>X Value, AKA Length</label><br/>
    <input type="text" value="" name="l"><br/>
    <input type="text" value="" name="w"><br/>
    <input type="text" value="" name="h"><br/>
    <input type='submit' name='subBtn' value='Guess Now!'/>
</form>
<?php
if($_POST['subBtn']) {
    $l = $_POST['l'];
    $w = $_POST['w'];
    $h = $_POST['h'];

    if (!is_numeric($l) || !is_numeric($w) || !is_numeric($h))
        echo "<p>Error: You did not put a numeric value for one or more inputs</p>";
    else
        echo "<p>The volume of the room is " . calcVolume($l, $w, $h) . " m<sup>3</sup></p>";
}
?>
</body>
</html>
