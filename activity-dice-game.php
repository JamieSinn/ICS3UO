<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="Activity 2-4d">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>

<body>
<h1>Dice Game!</h1>
<h3>Demonstrates rolling a die</h3>

<form name="form1" action="activity-dice-game.php" method="post">
    <label>Guess the roll</label>
    <select name="guess">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    <input type="submit" name="subButton" value="Send"/>
</form>
<?php

if($_POST['subButton'])
{
    $guess = $_POST['guess'];

    // rand() function randomly picks a number between 1 and 6 and assigns it to the variable $roll
    $roll = rand(1,6);
    echo "<p>You rolled a " . $roll . ". </p>";
    echo "You guessed: " . $guess;
    if($guess == $roll)
        echo "You guessed correctly! Congrats.";
    else
        echo "Try again, you didn't guess correct.";
    echo "<img src=\"images/die" . $roll . ".gif\" alt=\"die image\">";
}
?>
<p>Make a new guess to see if you are correct!</p>
</body>

</html>