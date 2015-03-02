<!DOCTYPE html>

<html lang="en">
<head>
    <title>Introduction to PHP</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style type="text/css">
        body {
            font-family: "Lucida Console", "Lucida Sans Typewriter", Monaco, "Bitstream Vera Sans Mono", monospace;
            font-size: 1.0em;
            color: #ffffff;
            /* cool css3 background from: http://lea.verou.me/css3patterns/ */
            background:
            linear-gradient(27deg, #1B48B2 5px, transparent 5px) 0 5px,
            linear-gradient(207deg, #1B48B2 5px, transparent 5px) 10px 0px,
            linear-gradient(27deg, #598BFF 5px, transparent 5px) 0px 10px,
            linear-gradient(207deg, #598BFF 5px, transparent 5px) 10px 5px,
            linear-gradient(90deg, #4079FF 10px, transparent 10px),
            linear-gradient(#232323 25%, #222222 25%, #222222 50%, transparent 50%, transparent 75%, #1B48B2 75%, #1B48B2);
            background-color: #1B48B2;
            background-size: 20px 20px;
        }
        .fancyInput {
            border: 1px solid #d35400;
            outline: none;
            font-size: 1.5em;
        }
        .fancyInput:hover {
            border: 1px solid #2980b9;
        }
        h1, h2 {
            color: #ffffff;
        }
        .subButton {
            font-size: 1.2em;
            border: 1px solid #d35400;
            padding: 5px;
        }
        .subButton:hover {
            border: 1px solid #2980b9;
            cursor: pointer;
            color: #ffffff;
        }
        p.output {
            padding: 10px;
            margin: 10px;
            background: #598BFF;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<?
echo "<h2>What is PHP?</h2>
	<p><b>PHP</b> (recursive acronym for <b>P</b>HP: <b>H</b>ypertext <b>P</b>reprocessor) (or a recursive acronym for Programmers hate PHP)is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>";
?>

<h2>Simple Form Validation with PHP</h2>

<?
/* the if statement below makes the code inside of it
only show up if the button in the form named 'submitBtn' is clicked.
You can have multiple submit buttons, but they must have different names.*/
if ($_POST['submitBtn1']) {
    // set the variables...
    $theName = $_POST['theName'];
    $socksColour = $_POST['socksColour'];
    $carBrand = $_POST['carBrand'];
    $email = $_POST['email'];
    $cokeOrPepsi = $_POST['cokeOrPepsi'];

    // print out the message
    echo "<p class='output'>The name that was entered into the form was: <b style='background: #f1c40f;'>" . $theName . "</b><br />
		The colour socks chosen was: <b style='background: #f1c40f;'>" . $socksColour . "</b><br/>
		The car brand chosen was: <b style='background: #232323;'>" . $carBrand . "</b><br/>
		Your email address is: <b style='background: #232323;'>" . $email . "</b><br/>
		You chose: <b style='background: #232323;'>". $cokeOrPepsi . "</b></p>";
}
?>

<h2>The Form</h2>
<p>Complete the form below and press submit.  Notice how the values are now output (echoed) to the page based and the <b>variable name</b> assigned in the form.</p>
<h3>Form Attributes</h3>
<ul>
    <li> "name" is the unique name of the form</li>
    <li> "get" method shows the variables and values in the address bar of your browser</li>
    <li> "post" method hides the type variables and values - the information is posted to the server</li>
    <li> "action" is the URL that the form will direct to once the submit button is pressed</li>
</ul>

<form name="form1" action="introduction-to-php.php" method="post">
    <b>Name:</b><br />
    <input type="text" name="theName" value="" class="fancyInput"/><br />
    <b>Colour of Socks:</b><br />
    <select name="socksColour" class="fancyInput">
        <option value=""></option>
        <option value="blue">Blue Socks</option>
        <option value="green">Green Socks</option>
        <option value="red">Red Socks</option>
    </select><br />
    <b>Car Brand: </b><br/>
    <select name="carBrand" class="fancyInput">
        <option value=""></option>
        <option value="ford">Ford (Found on road dead)</option>
        <option value="gm">General Motors</option>
        <option value="fiat">Fiat (Fix it again tony)</option>
    </select><br />
    <input type="radio" name="cokeOrPepsi" value="coke">Coke<br/>
    <input type="radio" name="cokeOrPepsi" value="pepsi">Pepsi<br/>
    <b>Email: </b><br/>
    <input type="email" name="email" value=""/><br/>
    <input type="submit" value="SUBMIT" name="submitBtn1" class="subButton"/>
</form>

</body>
</html>
