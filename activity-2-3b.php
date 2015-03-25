<!DOCTYPE html>
<html lang="en">
<head>
    <!-- I'm currently away at the North Bay Robotics Competition, I'll be away until Monday the 30th I've also been extremely sick, so I have not been able to do work. Though, this was quite simple.-->
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="Activity 2-3b">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2-3b</h1>
<p>Rock, Paper, Lizard, Spock!</p>
<form name="form1" action="activity-2-3b.php" method="post">
    <select name="num">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7<option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <select name="colour">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>\
    </select>
    <input type="submit" name="subButton" value="Send"/>
</form>
<?php
if($_POST['subButton'])
{
    $num = $_POST['num'];
    $colour = $_POST['colour'];
    switch($num)
    {
        case 0:
            if($colour == "red")
                echo "Lizard";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 1:
            if($colour == "red")
                echo "Lizard";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 2:
            if($colour == "red")
                echo "Lizard";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 3:
            if($colour == "red")
                echo "Lizard";
            else if($colour == "green")
                echo "Rock";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 4:
            if($colour == "red")
                echo "Lizard";
            else if($colour == "green")
                echo "Rock";
            else if($colour != "red")
                echo "Scissors";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 5:
            if($colour == "red")
                echo "Lizard";
            else if($colour == "green")
                echo "Rock";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 6:
            if($colour == "red" OR $colour == "blue")
                echo "Spock";
            else if($colour == "green")
                echo "Rock";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 7:
            echo "Nothing specific to output...sorry try again.";
            break;
        case 8:
            if($colour != "red")
                echo "Scissors";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 9:
            if($colour == "green")
                echo "Rock";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        case 10:
            if($colour == "green")
                echo "Rock";
            else
                echo "Nothing specific to output...sorry try again.";
            break;
        default:
            echo "Nothing specific to output...sorry try again.";
            break;
    }

    echo $message;
}
?>
</body>
</html>