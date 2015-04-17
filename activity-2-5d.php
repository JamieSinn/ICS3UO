<?php

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity 2.5d</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.5d</h1>
<p>Do While loops</p>
<?php

$degreeC = 100;
echo "<table style=\"width:100%\">" . "<tr><td><b>Degrees Celsius</b></td>" .
    "<td><b>Degrees Kelvin</b></td>" . "<td><b>Degrees Fahrenheit</b></td>";
do
{

    $degreeK = $degreeC + 273;
    $degreeF = 1.8*$degreeC + 32;
    echo "<tr><td>" . $degreeC . "</td><td>" . $degreeK . "</td><td>" .
        $degreeF . "</td></tr>";
    $degreeC--;
}
while($degreeC >= 0);
echo "</table>";
?>
</body>
</html>
