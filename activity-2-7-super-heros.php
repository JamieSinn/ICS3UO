<?php
$heroes[0] = "The Green Arrow";
$heroes[1] = "Wolverine";
$heroes[2] = "Batman";
$heroes[3] = "Hawkeye";
$heroes[4] = "Captain America";
$heroes[5] = "Black Widow";
$heroes[6] = "Iron Man";
$heroes[7] = "Hulk";
$heroes[8] = "Superman";
$heroes[9] = "The Flash";

function addTableRow($left, $right)
{
    echo "<tr><td>" . $left . "</td><td>" . $right . "</td></tr>";
}

function getImage($superhero)
{
    return "<img src=\"images/" . $superhero . ".jpg\"  height=300 width=150>";
}

function selectRandom($num)
{
    $r = rand(0, 9);
    if($r == $num)
        return "<h3>Selected</h3>";
    return "";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Superhero Battle</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Superhero Battle</h1>

<table border="3" style="width:100%;">
    <tr><td><b>Team Even</b></td><td><b>Team Odd</b></td></tr>
    <?php
    for($i = 0; $i < count($heroes); $i+=2)
    {
        addTableRow(getImage($heroes[$i]) . selectRandom($i), getImage($heroes[$i+1]) . selectRandom($i+1));
    }
    ?>
</table>
</body>
</html>
