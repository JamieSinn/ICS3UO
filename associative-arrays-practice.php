<?php
$name[0] = "echo";
$name[1] = "bmw";
$name[2] = "ferrari";
$name[3] = "lexus";

$truckname[0] = "f50";
$truckname[1] = "silverado";

$car['echo'] = "$20,000";
$car['bmw'] = "$50,000";
$car['ferrari'] = "$150,000";
$car['lexus'] = "$80,000";

// or another way to make the array
$truck = array("f50"=>"$50,000", "silverado"=>"$60,000");

// finish the display of the values for the cars and trucks.
?>
<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Practice</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.7 - Arrays</h1>
<?php
for($i = 0; $i < 4; $i++)
{
    echo "A(n) " . $name[$i] . " costs " . $car[$name[$i]] . ".<br />";
    if($i < 2)
    {
        echo "A(n) " . $truckname[$i] . " costs " . $truck[$truckname[$i]] . ". <br/>";
    }
}
?>
</body>
</html>

