<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Choose Your Own Adventure</title>

    <meta name="description" content="Activity 2-3c">
    <meta name="author" content="Jamie Sinn">

    <!-- styles - internal (not linked) -->
    <style>
        body {
            padding: 20px 20px 20px 20px;
            background-color: #ececec;
            color: #333333;
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
        }
    </style>

</head>
<body>
<h1>Choose your own adventure -FRC Edition</h1>
<p>Choose wisely!</p>

<?
$option = $_GET['option'];

if ($option == "") {

    echo "<p>You are the 1st alliance captain, you are faced with two teams, which do you pick?
		<br /><a href='choose-your-advnture.php?option=c4ca4238a0b923820dcc509a6f75849b'>Team #1</a> | <a href='choose-your-advnture.php?option=c81e728d9d4c2f636f067f89cc14862c'>Team #2</a>
		</p>";
}
    // 1
 else if ($option == "c4ca4238a0b923820dcc509a6f75849b")
    // 2 or 3
    echo "<p>You chose the first team, very smooth, you chose 1241. You are now back for the 2nd Pick, who do you choose<br />

		<a href='choose-your-advnture.php?option=eccbc87e4b5ce2fe28308fd9f2a7baf3'>Rookie #1</a> | <a href='choose-your-advnture.php?option=c83bbf39a26190b2d0ec2d3091356053'>Rookie #2</a>
		</p>";
    // 2
 else if ($option == "c81e728d9d4c2f636f067f89cc14862c")
    // 3 or 4
     echo "<p>You have lost. Sorry.<br /><a href='choose-your-advnture.php'>Next Regional?</a></p>";
    // 3
else if ($option == "eccbc87e4b5ce2fe28308fd9f2a7baf3")
    // 5 or 6
    echo "<p>Congratulations. You chose the team that could actually drive. Now. The big issue, 1334 or 1114? Who to face first<br />
		<a href='choose-your-advnture.php?option=8bf1569c67ae09bffec145f2ab96e637'>1334</a> | <a href='choose-your-advnture.php?option=1679091c5a880faf6fb5e6087eb1b2dc'>1114</a>
		</p>";
    // 4
else if ($option == "c83bbf39a26190b2d0ec2d3091356053")
    echo "<p>You have lost. Sorry.<br /><a href='choose-your-advnture.php'>Next Regional?</a></p>";
    // 5
else if( $option == "8bf1569c67ae09bffec145f2ab96e637")
    echo "<p>Good choice, you beat 1334, and you go onto the finals to face the unbeaten alliance of 2056 and 1114<br />

		<a href='choose-your-advnture.php'>Replay?</a></p>";
    // 6
else if($option == "1679091c5a880faf6fb5e6087eb1b2dc")
    echo "<p>You have lost. Sorry.<br /><a href='choose-your-advnture.php'>Next Regional?</a></p>";
else
    echo "<p>You have made an invalid selection!</p>";

?>

</body>
</html>