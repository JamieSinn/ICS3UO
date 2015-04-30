<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity 2.5b</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.5b</h1>
<p>Loops - for loops</p>
<?php
$special = "";
for($i = 0; $i <= 20; $i+=2)
{
    if($i == 10)
        $special = " - Half way there!";
    echo "<p>".$i . $special."</p><br/>";
}
?>
</body>
</html>
