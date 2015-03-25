<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="Activity 2-3">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2-3</h1>
<p>If statements and user input</p>
<form name="form1" action="activity-2-3.php" method="post">
    <select name="day">
        <option value="monday">Monday</option>
        <option value="tuesday">Tuesday</option>
        <option value="wednesday">Wednesday</option>
        <option value="thursday">Thursday</option>
        <option value="friday">Friday</option>
        <option value="saturday">Saturday</option>
        <option value="sunday">Sunday</option>
    </select>
    <input type="submit" name="subButton" value="Send"/>
</form>
<?php
if($_POST['subButton'])
{
    $day = $_POST['day'];
    $message = "";
    if($day == "monday")
        $message = "I hate Monday's - Garfield";
    else if($day == "tuesday")
        $message = "I need more sleep";
    else if($day == "wednesday")
        $message = "Hump day! - Camels";
    else if($day == "thursday")
        $message = "FRC Practice Day, oh the joys of a broken robot.";
    else if($day == "friday")
        $message = "FRC Qualifications Day, oh joy, still a broken robot....";
    else if($day == "saturday")
        $message = "FRC Eliminations Day, I hope we get picked....";
    else if($day == "sunday")
        $message = "Sleeeeeeep... Wait, Did I have homework....";

    echo $message;
}
?>
</body>
</html>