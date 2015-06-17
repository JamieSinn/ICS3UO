
<form action="exam-q7.php" method="POST">
    First Name: <input type="text" name="fname" value=""/><br />
    Last Name: <input type="text" name="lname" value=""/><br />
    Age: <input type="text" name="age" value=""/><br />
    Favourite #: <input type="text" name="favnum" value=""/><br />
    <input type="submit" name="submitBtn" value="Submit"/>
</form>
<?php
// the function for the calculation
//code #1 goes here
// You must create and call a function that will take the user inputted number, square it, multiply it by 5 and then subtract 7.  Return this result and display it as described above.

function calc($favNum)
{
    return (pow($favNum, 2) * 5) -7;
}
if ($_POST['submitBtn'])
{
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $age = $_POST['age'];
    $fav = $_POST['favnum'];


    echo "<p>Hello " . $first . " " . $last . ",  You have indicated that you are " . $age . " years old.
          You have also indicated that your favourite number is " . $fav .
        " The square of your number, multiplied by 5 and subtract 7 is " . calc($fav);
}
?>