
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
<h2>Working with Variables: Parsing URLs</h2>


<?php
// learning to parse variables from URLs
echo "<p> We are learning how to parse variables from URLs.  The value of x is <b>" . $_GET['x'] . "</b>,  the value of y is <b>" . $_GET['y'] . "</b> the value of z is <b>" . $_GET['z'] . "</b> and the title is <b>" . $_GET['title'] . "</b></p>";
echo "<h2>" . $_GET['title'] . "</h2>";

if($_GET['sub'])
{
    $x = $_GET['x_t'];
    $y = $_GET['y_t'];
    $z = $_GET['z_t'];
    $tableBorder = $_GET['tbBorder_t'];
    $tableCellpad = $_GET['tbCellpad_t'];
    $tableColour = $_GET['tbColour_t'];
}
else
{
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = $_GET['z'];
    $tableBorder = $_GET['tbBorder'];
    $tableCellpad = $_GET['tbCellpad'];
    $tableColour = $_GET['tbColour'];
}

$result1 = $x + $y -(2*$z);

$result2 = (2*$x) - (4*$y) + (3 * ($z-80));

$result3 = $result1 + $result2;

?>

<form name="userInput" action="" method="get">

    X: <input type="number" name="x_t" value="" /><br />
    Y: <input type="number" name="y_t" value="" /><br />
    Z: <input type="number" name="z_t" value="" /><br />
    Table Border: <input type="number" name="tbBorder_t" value="" /><br />
    Table Cell Padding: <input type="number" name="tbCellpad_t" value="" /><br />
    Table Background Colour: <input type="color" name="tbColour_t" value="" maxlength="6"/><br />
    <input type="submit" name="sub" value="Submit" /><br/>
</form>


<table cellpadding="<?php echo $tableCellpad?>" cellspacing="5px" border="<?php echo $tableBorder . "px" ?>" bgcolor="<?php echo "#". $tableColour ?>">
    <tr>
        <td><b>Mathmatical Operation</b></td>
        <td><b>Result</b></td>
    </tr>
    <tr>
        <td>x + y -(2*z)</td>
        <td>
            <?php echo $result1 ?>
        </td>
    </tr>
    <tr>
        <td>2x-4y+(3z-80)</td>
        <td>
            <?php echo $result2 ?>
        </td>
    </tr>
    <tr>
        <td>result of row2-col2 + result of row3-col2</td>
        <td>
            <?php echo $result3 ?>
        </td>
    </tr>
</table>

</body>
</html>