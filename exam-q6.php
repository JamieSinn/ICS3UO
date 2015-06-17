<?php
echo "<h2>Halloween Scare!</h2>";
echo "<p>A ghost is counting from 5 to 20...</p>";

if ($_GET['loop'] == "yes") {
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];

    for($i = $n1; $i <= $n2; $i++)
    {
        if($i == 13)
            echo "<p>BOO!</p><br/>";
        echo "<p>The number is: " . $i . "</p>";
    }
}
//exam-q6.php?num1=5&num2=20&loop=yes