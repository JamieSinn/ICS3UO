<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP SESSIONS</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.5c</h1>
<p>Nested for loops</p>
<?php
for($i = 0; $i<3;$i++)
{
    for($j = 0; $j < 5; $j++)
    {
        echo "Section " . $i . "-" . $j;
    }
}
?>
</body>
</html>
