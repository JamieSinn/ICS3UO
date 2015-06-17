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
<h1>Exam Question 3</h1>
<h2>Box - Refresh the page to see the rest of the contents!</h2>
<a href="exam-q3.php">Or click me to reload the page.</a>
<?php
$box[0] = "Food";
$box[1] = "Santa";
$box[2] = "Bombs";
$box[3] = "Cows";
$box[4] = "Very unimaginative student writing an exam";

$rand = rand(0,4);
$readable = $rand+1;
echo $box[$rand] . " Was the " . $readable . " item in the box.";
?>
</body>
</html>
