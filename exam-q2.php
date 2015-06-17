

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
<h1>Exam Question 2</h1>
<?php
echo "<form action='exam-q2.php' method='GET'>";
echo "<label>Guess a # between 1 and 10:</label><br/><input type='text' name='num1' value=''/><br/>";
echo "<input type='submit' name='subBtn' value='Guess Now!'/>";
echo "</form>";

if ($_GET['subBtn'])
{
    $num1 = $_GET['num1'];
    echo "<p>You guessed #" . $num1 . "</p>";
    if ($num1 == 7)
        echo "<p>You guessed correctly!</p>";
    else
        echo "<p>You did NOT guess correctly!</p>";
}
?>
<p>
    Quite a few errors, such as = instead of == in an if statement, the form action, no semicolon, post instead of get, etc. Many, many errors that were blatant.
</p>
</body>
</html>