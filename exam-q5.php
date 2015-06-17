<?php
echo "<h2>Conditional Statements</h2>";
echo "<form action='exam-q5.php' method='GET'>";
echo "Pick a number: 
<select name='num'>
	<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='6'>6</option>
	<option value='7'>7</option>
	<option value='8'>8</option>
	<option value='9'>9</option>
	<option value='10'>10</option>
</select><br />";
echo "<input type='submit' name='submit' value='Guess Now!'/>";

if ($_GET['submit'])
{
    $n = $_GET['num'];
    switch($n)
    {
        case 1:
            echo "Awesome!";
            break;
        case 2:
            echo "Awesome!";
            break;
        case 3:
            echo "Cool stuff!";
            break;
        case 4:
            echo "Cool stuff!";
            break;
        case 5:
            echo "Phew...right on the money!";
            break;
        case 6:
            echo "Cool stuff!";
            break;
        case 7:
            echo "Lucky number 7!";
            break;
        case 8:
            echo "Dynamite!";
            break;
        case 9:
            echo "Dynamite!";
            break;
        default:
            echo "You did not enter a number between 1 and 10.";
            break;
    }
    //Alternatively, could have used if statements, but I felt that a switch is better suited for this.
}
echo "</table>";