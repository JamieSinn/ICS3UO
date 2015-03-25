<!DOCTYPE html>

<html lang="en">
<head>
    <title>Activity/Lesson 1.9</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
            font-family: Arial, Verdana;
            font-size: 1.0em;
            width: 100%;
            /* http://lea.verou.me/css3patterns/ */
            background:
            linear-gradient(45deg, #92baac 45px, transparent 45px)64px 64px,
            linear-gradient(45deg, #92baac 45px, transparent 45px,transparent 91px, #e1ebbd 91px, #e1ebbd 135px, transparent 135px),
            linear-gradient(-45deg, #92baac 23px, transparent 23px, transparent 68px,#92baac 68px,#92baac 113px,transparent 113px,transparent 158px,#92baac 158px);
            background-color:#e1ebbd;
            background-size: 128px 128px;
        }
        form {
            position: relative;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            background: rgba(255,255,255,0.7);
        }
        input, select, textarea {
            font-size: 1.4em;
            border: 1px solid #999999;
            padding: 5px;
            border-radius: 0.5em;
            outline: none;
            margin: 5px;
        }

    </style>
</head>
<body>
<h2>HTML Forms & Input - The Basics</h2>
<p>This simple site will show you how to create a simple form; there will be a PHP extension to this show how to work with the submitted data.</p>

<!-- PHP extension code goes below this -->
<?php
// only show the information if the button named "subButton" has been pressed
if ($_GET['subButton']) {
    // set the variable with the submitted value
    $firstname = $_GET['fname'];
    $password = $_GET['pwd'];

    // display the name to the screen
    echo "<p>Your first name is " . $firstname . ".</p>";
    echo "<p>Your password is  $password.</p>";
}
?>

<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values //-->
<form name="form1" action="activity-1-9.php" method="get">
    <!-- text input //-->
    First Name: <input type="text" name="fname" value="" placeholder="FIRST NAME" required/>
    <hr size="1" />

    <!-- password input //-->
    Password: <input type="password" name="pwd" value=""/>
    <hr size="1" />

    <!-- radio input //-->
    <input type="radio" name="sex" value="male"> Male</input><br />
    <input type="radio" name="sex" value="female"> Female</input>
    <hr size="1" />

    <!-- checkbox input //-->
    <input type="checkbox" name="fruit1" value="Pear"> I have a pear</input><br />
    <input type="checkbox" name="fruit2" value="Apple" checked> I have an apple</input>
    <hr size="1" />

    <!-- simple drop-down list //-->
    <select name="car">
        <option value="">- Choose a Car -</option>
        <option value="Volvo">Volvo</option>
        <option value="Echo">Echo</option>
        <option value="Ferrari" selected >Ferrari</option>
        <option value="Audi">Audi</option>
        <option value="Volkswagen">Volkswagen</option>
    </select>
    <hr size="1" />

    <!-- hidden input -->
    <input type="hidden" name="hideme" value="42"/>

    <!-- textarea input //-->
    <textarea name="info" rows="5" cols="50"></textarea>
    <hr size="1" />

    <!-- submit button //-->
    <input type="submit" name="subButton" value="Send"/>
</form>

</body>
</html>