
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity 2.5a</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.5a</h1>
<p>Loops - while loops</p>
<?php
$count = 1;
while($count <= 10)
{
    $special = "";
    if($count == 3)
        $special = " - yay, this is number three!";
    else if($count == 7)
        $special = " - lucky number seven!";
    echo "<p>" . $count .  $special . "</p></br>";
    $count++;
}
?>
</body>
</html>
