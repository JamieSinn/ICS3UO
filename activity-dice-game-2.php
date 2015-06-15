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
<h1>Dice Game Scores</h1>
<h3>Track your wins/losses from <a href="activity-dice-game.php">the dice game.</a></h3>
<?php
function score()
{
    $return = "";
    if($_SESSION['wins'] == "")
        $return .= "No wins yet. ";
    if($_SESSION['losses'] == "")
        $return .= "No losses yet. ";
    if($_SESSION['credits'] == "")
        $return .= "No credits.... ";
    if($return != "")
        return $return;

    return "<h3>Wins: "  .$_SESSION['wins'] . " Losses: "  . $_SESSION['losses'] . " Credits: " . $_SESSION['credits'] . "</h3>";
}
echo score();
?>


</body>
</html>