
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Activity 2-2 - Jamie Sinn</title>

    <meta name="description" content="Activity 2.2">
    <meta name="author" content="Jamie Sinn">

    <link rel="stylesheet" href="styles.css?v=1.0">

    <style>
       /* body {
            padding: 20px 80px 20px 80px;

            /* http://lea.verou.me/css3patterns/
            background-color: #fff;
            background-image:
            linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
            linear-gradient(#eee .1em, transparent .1em);
            background-size: 100% 1.2em;

            /* http://cssfontstack.com/
            font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        }
        /* default link styles
        a:link, a:visited, a:active {
            color: #333333;
            text-decoration: underline;
        }
        a:hover {
            color: #ffa500;
            text-decoration: underline;
        } */
    </style>
</head>
<body>
<!-- main content -->
<h1>Activity 2.2</h1>
<p align="center">
    Basic math via form io with PHP. I expanded on this and used functions
</p>

<table align="center" border="2px">
    <tr>
        <td width="200px" height="100px">
            <!-- Perimeter of a rectangle -->
            <form name="per" action="" method="get">
                Width: <input type="number" name="per_wid" value="" /><br />
                Length: <input type="number" name="per_length" value="" /><br />

                <input type="submit" name="per_sub" value="Submit" />
            </form>
            <?php
            if ($_GET['per_sub'])
            {
                $width = $_GET['per_wid'];
                $length = $_GET['per_length'];
                perimeter($length, $width);
            }
            ?>
        </td>

       <td width="200px" height="100px">
            <!-- Area of a triangle -->
            <form name="area" action="" method="get">
                Base: <input type="number" name="area_base" value="" /><br />
                Height: <input type="number" name="area_height" value="" /><br />
                <input type="submit" name="area_sub" value="Submit" />
            </form>
           <?php
           if($_GET['area_sub']) {
               $area_b = (int)$_GET['area_base'];
               $area_h = (int)$_GET['area_height'];
               $triArea = ((int)$area_b * (int)$area_h)/2;
               echo "<p>The area is: " . $triArea . "<br></p>";
           }
           ?>
       </td>
    </tr>
    <tr>
        <td width="200px" height="100px">
            <!-- To challenge myself, I made it in degrees kelvin, not celsius, I convert it later on 1K = -272.15C -->
            <label>Select a temperature in degrees Kelvin to see the speed of sound</label>
            <form name="sound" action="" method="get">
                <select name="sound_temp">
                    <option value="263.15" selected>263.15K</option>
                    <option value="273.15">273.15K</option>
                    <option value="283.15">283.15K</option>
                    <option value="293.15">293.15K</option>
                    <option value="303.15">303.15K</option>
                </select>
                <input type="submit" name="sound_sub" value="Submit" />
            </form>
            <?php
            if($_GET['sound_sub'])
            {
                $temp = $_GET['sound_temp'];
                speedOfSound($temp);
            }
            ?>
        </td>
        <td width="200px" height="100px">
            <!-- "Random" number -->
            <form name="rand" action="" method="get">
               Input your Random Number: <input type="number" name="rand_start" value="" /><br />
                <input type="submit" name="rand_sub" value="Submit" />
            </form>
            <?php
            if($_GET['rand_sub'])
            {
                $start = $_GET['rand_start'];
                magicNumber($start);
            }
            ?>
        </td>
    </tr>

</table>
<!-- PHP Code Snippets goes below this -->


<?php
// Input - Length and width
function perimeter($length, $width)
{
    $perimeter = 2 * $length + 2* $width;
    echo "<p>The perimeter is: " . $perimeter . "<br></p>";
}
// Input - Base and height
// For some stupid reason, using this as a method, even with casting, will not work, always returns a value of 0, likely because one is another type.
function triangleArea($base, $height)
{
    $triArea = ((int)$base * (int)$height)/2;
    echo "<p>The area is: " . $triArea . "<br></p>";
}
// Input - Temperature in Kelvin
function speedOfSound($temp)
{
    $tempC = $temp -272.15;
    $speed = ($tempC * 0.6) + 332;
    echo "<p>The speed of sound at " . $tempC. " C is: " . $speed . " m/s<br></p>";
}
// Input - Random Number
function magicNumber($base)
{
    $num = ((($base + 2) * 3) -6) *3;
    echo "<p>Your magic number is" . $num . "<br></p>";
}
?>

<!-- /main content -->

<!-- load jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>