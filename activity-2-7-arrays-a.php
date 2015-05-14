<?php
$train[0] = "Monkeys";
$train[1] = "Chickens";
$train[2] = "Cows";
$train[3] = "Hungry Wolves";
$train[4] = "Hungry Toddlers";
$train[5] = "Angry Rioters";
$train[6] = "Santa";
$train[7] = "Coal";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Activity 2.7</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
    <body>
    <h1>Activity 2.7 - Arrays</h1>
    <h2>You are a train inspector, and you need to inspect the train for evidence of Santa, as he has gone missing.</h2>
        <form name="form1" action="activity-2-7-arrays-a.php" method="post">
            <label>Which train car do you inspect?</label>
            <select name="car" required>
                <option value="0">Engine Car/Locomotive Head</option>
                <option value="1">Kitchen Car</option>
                <option value="2">Passenger Car - First Class</option>
                <option value="3">Dining Car</option>
                <option value="4">Berthing Car</option>
                <option value="5">Passenger Car - Cattle Class</option>
                <option value="6">Coal Storage Car</option>
                <option value="7">Caboose</option>
                <option value="-1">All</option>
            </select><br/>
            <input type="submit" name="subButton" value="Inspect"/><br/>
        </form>

    <h1>Your inspection results!</h1>
    <?php

    if($_POST['subButton'])
    {
        $car = $_POST['car'];
        if($car == -1)
        {
            for($i = 0; $i < 8; $i++)
            {
                echo "<h2>"."Your inspection found " . $train[$i] . " in it. </h2>";
                return;
            }
        }
        echo "<h2>"."Your inspection found " . $train[$car] . " in it.";
    }
    ?>
    </body>
</html>

