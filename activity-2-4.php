<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="Activity 2-4">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<h1>Activity 2-4</h1>
<p>Calculator</p>
<form name="form1" action="activity-2-4.php" method="post">
    <label>Number 1</label>
    <select name="num1">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="9">10</option>
    </select><br/>
    <label>Number 2</label>
    <select name="num2">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="9">10</option>
    </select><br/><hr/>
    <label>Operation</label><br/>
    <input type="radio" name="operation" value="mult">Multiply<br>
    <input type="radio" name="operation" value="divi">Divide<br>
    <input type="radio" name="operation" value="add">Addition<br>
    <input type="radio" name="operation" value="subt">Subtraction<br>
    <input type="submit" name="subButton" value="Send"/><br/><hr/>
</form>
<?php
if($_POST['subButton'])
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";
    switch($operation)
    {
        case "mult":
            $result = $num1 * $num2;
            break;
        case "divi":
            if($num2 == "0")
            {
                $result="Really? Go learn calculus if you really want to do this. I'm not making a calculus calculator for you.";
                break;
            }
            $result = $num2 / $num2;
            break;
        case "add":
            $result = $num1 + $num2;
            break;
        case "subt":
            $result = $num1 - $num2;
            break;
    }

    echo $result;
}
?>
</body>
</html>