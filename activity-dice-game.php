<?php
session_start();
?>
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
    <label>Wager credits; You start with 10; Double or nothing</label>
    <input type="number" name="credits" value="">
    <input type="submit" name="subButton" value="Send"/>
</form>
<?php

if($_POST['subButton']) {
    if ($_SESSION['wins'] == "")
        $_SESSION['wins'] = 0;
    if ($_SESSION['losses'] == "")
        $_SESSION['losses'] = 0;
    if ($_SESSION['credits'] == "")
        $_SESSION['credits'] = 10;

    $credits = $_POST['credits'];
    $guess = $_POST['guess'];

    // rand() function randomly picks a number between 1 and 6 and assigns it to the variable $roll
    $roll = rand(1, 6);
    if ($credits > 0 && $credits <= $_SESSION['credits'])
        $_SESSION['credits'] -= $credits;
    else
    {
        echo "Error: You had too large or too small of a number as a wager.";
        return;
    }


    echo "<p>You rolled a " . $roll . ". </p>";
    echo "You guessed: " . $guess;
    if($guess == $roll)
    {
        echo "You guessed correctly! Congrats.";
        $credits *=2;
        $_SESSION['wins'] += 1;
    }
    else
    {
        echo "Try again, you didn't guess correct.";
        $credits =0;
        $_SESSION['losses'] += 1;
    }
    $_SESSION['credits'] += $credits;
    echo "<img src=\"images/die" . $roll . ".gif\" alt=\"die image\">";
}
?>
<p>Make a new guess to see if you are correct!</p>
<p>Current Credit Count: <?php echo $_SESSION['credits']; ?></p>
<p>Track your scores here: <a href="activity-dice-game-2.php">Scores</a></p>
</body>

</html>