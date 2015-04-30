<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity 2.5c</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.5c</h1>
<p>Nested for loops</p>
<?php
for($i = 1; $i<=3;$i++)
{
    for($j = 1; $j <= 5; $j++)
    {
        echo "<p>Section " . $i . "-" . $j . "</p><br/>";
    }
}
?>
</body>
</html>
