<?php
$names[0] = "mercury";
$names[1] = "venus";
$names[2] = "earth";
$names[3] = "mars";
$names[4] = "jupiter";
$names[5] = "saturn";
$names[6] = "uranus";
$names[7] = "neptune";

$acceleration["mercury"] = 3.76;
$acceleration["venus"] = 9.04;
$acceleration["earth"] = 9.8;
$acceleration["mars"] = 3.77;
$acceleration["jupiter"] = 23.6;
$acceleration["saturn"] = 10.06;
$acceleration["uranus"] = 8.87;
$acceleration["neptune"] = 11.23;

$image["mercury"] = "http://www.cosmicelk.net/mercury.jpg";
$image["venus"] = "http://www.cosmicelk.net/venus.jpg";
$image["earth"] = "http://solarviews.com/raw/earth/bluemarblewest.jpg";
$image["mars"] = "http://space-facts.com/wp-content/uploads/mars.jpg";
$image["jupiter"] = "http://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Jupiter_New_Horizons.jpg/1024px-Jupiter_New_Horizons.jpg";
$image["saturn"] = "http://sphereboy.com/wp-content/uploads/2015/01/saturnmay2013.png";
$image["uranus"] = "http://www.planetsforkids.org/upload/-uranus-b.jpg";
$image["neptune"] = "https://worldbookblog.files.wordpress.com/2014/09/pc367796-src.jpg";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2.7 - Arrays</h1>
<?php
for($i = 0; $i < 8; $i++)
{
    echo "<h2> Planet: " . $names[$i] . "</h2>";
    echo "<h3> Acceleration of Gravity on " . $names[$i] . " is " . $acceleration[$names[$i]] . "</h3>";
    echo "<img src=" . $image[$names[$i]] . " height=\"50px\" width=\"50px\">";
}
?>
</body>
</html>

