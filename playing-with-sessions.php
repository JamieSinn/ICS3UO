<?php
// start the PHP session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP SESSIONS</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<?php
// initialize wins and losses
if ($_SESSION['wins'] == "")
    $_SESSION['wins'] = 0;

if ($_SESSION['losses'] == "")
    $_SESSION['losses'] = 0;

if ($_SESSION['rolls'] == "")
    $_SESSION['rolls'] = 0;


// title for the page
echo "<h1>PHP SESSIONS</h1>";

// check for reset
if ($_GET['reset'] == "yes") {
    $_SESSION['wins'] = 0;
    $_SESSION['losses'] = 0;
    $_SESSION['rolls'] = 0;
    echo "<p>The game has been reset.</p>";
} else {
    // create a random number between 1 and 5.
    $randNum = rand(1,5);

    // show the random number
    echo "<p>The random number is <b>" . $randNum . "</b></p>";

    if ($randNum == 3)
    {
        echo "<p>The number equalled 3. YOU WIN!</p>";
        $_SESSION['wins'] += 1;
        $_SESSION['rolls'] += 1;
    } else {
        echo "<p>The number did NOT equal 3. YOU LOSE!</p>";
        $_SESSION['losses'] += 1;
        $_SESSION['rolls'] += 1;
    }
}
$winperc = ($_SESSION['wins'] / $_SESSION['rolls']) *100;
$lossperc = ($_SESSION['losses'] / $_SESSION['rolls']) *100;
echo "<p>WINS: " . $_SESSION['wins'] . " |  LOSSES: " . $_SESSION['losses'] . "  | Total Rolls: " . $_SESSION['rolls'] . "</p>";
echo "<p>Win Percentage: " . $winperc . "% | Loss Percentage: ". $lossperc . "% </p>";
echo "<p><a href='playing-with-sessions.php'>ROLL AGAIN</a> | <a href='playing-with-sessions.php?reset=yes'>RESET</a></p>";
?>
</body>
</html>
