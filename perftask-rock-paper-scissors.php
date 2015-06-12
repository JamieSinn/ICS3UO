<?php
// Rock = 1 Paper = 2 Scissors = 3
// Rock beats Scissors, 1 > 3
// Paper beats Rock, 2 > 1
// Scissors beats Paper, 3 > 2

$wins = 0;
$losses = 0;
function addWin()
{
    global $wins;
    $wins++;
}
function addLoss()
{
    global $losses;
    $losses++;
}
function getComputerPlay()
{
    return rand(1,3);
}
function getPlayerPlay()
{
    if ($_POST['submit'])
    {
        $player = $_POST['player'];
        switch($player)
        {
            case "rock":
                return 1;
            case "paper":
                return 2;
            case "scissors":
                return 3;
        }
    }
}
function getBestOf()
{
    if($_POST['submit'])
    {
        return $_POST['bestof'];
    }
}
function getRoundWinner($player, $computer)
{
    if($player == $computer)
    {
        return "Draw";
    }
    else if ($player == 1 && $computer == 3)
    {
        addWin();
        return "Win";
    }
    else if ($player == 2 && $computer == 1)
    {
        addWin();
        return "Win";
    }
    else if ($player == 3 && $computer == 2)
    {
        addWin();
        return "Win";
    }
    else
    {
        addLoss();
        return "Loss";
    }
}
function getGameWinner()
{
    global $wins, $losses;
    $bestof = getBestOf();
    if($wins > $bestof/2 || $losses > $bestof/2)
    {
        if($wins > $losses)
        {
            return "You win the game! Refresh to play again.";
        }
        else
        {
            return "The computer beat you, refresh to play again.";
        }
    }
    else
        return 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="ICS3UO Web Development Site">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<!-- main content -->
<h1>Performance Task - Rock Paper Scissors</h1>
<h2>Play Rock Paper Scissors against a webserver!</h2>


<form name="form" action="perftask-rock-paper-scissors.php" method="post">
    <b>Your play</b><br />
    <input type="radio" name="player" value="rock" required/>Rock<br />
    <input type="radio" name="player" value="paper" required/>Paper<br />
    <input type="radio" name="player" value="scissors" required/>Scissors<br />
    <b>Best of</b><br />
    <input type="radio" name="bestof" value="3" required/>3<br />
    <input type="radio" name="bestof" value="5" required/>5<br />
    <input type="radio" name="bestof" value="7" required/>7<br />
    <input type="submit" value="Calculate" name="submit"/><br/>
</form>
<?php
if($_POST['submit'])
{
    for($i = 1; $i <= getBestOf(); $i++)
        echo "<h3>Result: " . getRoundWinner(getPlayerPlay(), getComputerPlay()) . "</h3>";
    if($wins > getBestOf()/2)
        echo "<h3>You beat the computer!</h3>";
    else
        echo "<h3>You sadly lost to the computer, try again!</h3>";

}


?>
</body>
</html>
