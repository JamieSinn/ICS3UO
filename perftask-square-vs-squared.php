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

<form name="form" action="perftask-square-vs-squared.php" method="post">
    <b>Starting Number</b><br />
    <input type="number" name="start" value="" required/><br />
    <b>End Number</b><br />
    <input type="number" name="end" value="" required><br/>
    <input type="submit" value="Calculate" name="submit"/><br/>
</form>
<?php

if($_POST['submit'])
{
    $start = $_POST['start'];
    $end = $_POST['end'];

    if($end < $start)
    {
        outputText("Error: End number is less than start number.");
        return;
    }
    outputTableRow("<b>Number</b>", "<b>Square</b>", "<b>Square Root</b>");
    for($i = $start; $i <= $end; $i++)
    {
        outputTableRow($i, pow($i, 2), sqrt($i));
    }
    outputTableRow(0,0,0);
}

function outputTableRow($col1, $col2, $col3)
{
    // This is my uber sketchy way of checking if the strings inputted are actually the header or the end of the table
    if(strpos($col1, "<b>") !== false)
    {
        echo "<table style=\"width:100%\"><tr><td>" . $col1 . "</td><td>" . $col2."</td><td>". $col3 . "</td></tr>";
        return;
    }
    else if ($col1 == 0 && $col2 == 0 && $col3 == 0)
    {
        echo "</table>";
        return;
    }

    echo "<tr><td>" . $col1."</td><td>". $col2. "</td><td> " . $col3 . "</td></tr>";
}
function outputText($text)
{
    echo "<h4> " . $text . "</h4>";
}
?>


</body>
</html>
