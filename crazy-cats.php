
<!DOCTYPE html>
<html>
<head>
    <title>Crazy Cats! - Lesson Evaluation</title>
    <style>
        body {
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        }
        a:link, a:active, a:visited {
            text-decoration: underline;
            color: #333333;
        }
        a:hover {
            color: #999999;
            text-decoration: underline;
        }
        h2.error {
            color: #ff0000;
        }
        h1 {
            color: #003366;
            text-shadow: 2px 2px #444444;
        }
    </style>
</head>
<body>
<h1>Crazy Cats!</h1>

<form name="form1" action="crazy-cats.php" method="post">
    <label>Colour of the Cat</label>
    <select name="colour">
        <option value="white">White</option>
        <option value="black">Black</option>
        <option value="spotted">Spotted</option>
        <option value="orange">Orange</option>
        <option value="grey">Grey</option>
    </select>
    <label>Mass of the Cat</label>
    <input type="number" name="mass" value="" placeholder="Cat's mass in KG" required/>
    <label>Name of the Cat</label>
    <input type="text" name="name" value="" placeholder="Cat's name" required/>

    <input type="submit" name="subButton" value="Send"/>
</form>
<?php
if($_POST['subButton'])
{
    $name = $_POST['name'];
    $mass = $_POST['mass'];
    $colour = $_POST['colour'];
    $imagePath = "";
    $message = "";
    $extra = "";

    if($colour == "black" AND $mass >20)


    if($mass <= 0)
        $message = "Invalid cat. Nice try";
    else if($mass > 0 AND $mass <= 2.5)
        $message = "Skin and Bones!";
    else if($mass > 2.5 AND $mass <= 5)
        $message ="Small, but healthy";
    else if($mass > 5 AND $mass <= 10)
        $message = "Getting a little heavy I think?";
    else if($mass > 10 AND $mass <= 15)
        $message = "You may want to hide the food...";
    else if($mass > 15 AND $mass <= 20)
        $message = "Are you sure that this is a cat";
    else
        $message = "You're going to need another job to feed this thing!";

    switch($colour) {
        case "white":
            break;
        case "black":
            if ($mass > 20)
            {
                $extra = "That is one fat black cat. It won't be walking across any ones path, it'll be rolling.";
                $imagePath = "images/fatblackcat.jpg";
                break;
            }
            $imagePath = "images/blackcat.jpg";
            break;
        case "spotted":
            $imagePath = "images/spottedcat.jpg";
            break;
        case "orange":
            $imagePath= "images/orangecat.jpg";
            break;
        case "grey":
            $imagePath = "images/greycat.jpg";
            break;
    }

    $output = "<h2>" . $name . "</h2><br/><p>" . "<img src=$imagePath></><br/>" . $mass . "kgs<br/>" . $message . "<br/>" . $extra;
    echo $output;
}


?>
</body>
</html>
