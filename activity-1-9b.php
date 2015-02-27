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

<h2 align="center">Website Sign Up - Dream Lottery</h2>
<p align="center">Sign up for a lottery to win your dream items!</p>

<?php
if ($_GET['buttonSubmit'])
{
    $username = $_GET['username'];
    $email = $_GET['email'];

    echo "<p>Your desired username is " . $username . ".</p>";
    echo "<p>Your email address is $email.</p>";
}
?>

<form name="form1" action="activity_1-9.php" method="get">
    <!-- username input //-->
    Username: <input type="text" name="username" value="" placeholder="Your username Here" required/>
    <hr size="1" />

    <!-- email input //-->
    Email: <input type="email" name="email" value=""/>
    <hr size="1" />

    <!-- radio button input //-->
    <label>Your Gender</label>
    <input type="radio" name="sex" value="male"> Male</input><br />
    <input type="radio" name="sex" value="female"> Female</input>
    <hr size="1" />

    <!-- checkbox input //-->
    <label>What is your dream fruit/flower?</label>
    <input type="checkbox" name="flower1" value="Strawberry"> I have a Strawberry</input><br />
    <input type="checkbox" name="fruit1" value="Pineapple" checked> I have a Pineapple</input>
    <hr size="1" />

    <!-- simple drop-down list //-->
    <label>What is your dream car brand</label>
    <select name="car">
        <option value="">- Choose your dream car brand -</option>
        <option value="Bugatti">Bugatti</option>
        <option value="Porsche">Porsche</option>
        <option value="Ferrari" selected >Ferrari</option>
        <option value="Audi">Audi</option>
        <option value="Volkswagen">Volkswagen</option>
    </select>
    <hr size="1" />

    <!-- hidden input -->
    <input type="hidden" name="hideme" value="42"/>
    <label>Why should you win the lottery?</label>
    <!-- textarea input //-->
    <textarea name="info" rows="5" cols="50"></textarea>
    <hr size="1" />

    <input type="submit" name="buttonSubmit" value="Send"/>
</form>