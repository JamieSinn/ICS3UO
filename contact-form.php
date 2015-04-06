<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="Activity 2-4">
    <meta name="author" content="Jamie Sinn">
    <style>
        input, textarea, select, button {
            width : 150px;
            margin: 0;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        form {
            position: relative;

            width  : 740px;
            height : 498px;
            margin : 0 auto;

            background: #FFF url(images/blackbg.jpg);
        }
    </style>
</head>
<body>
<h1>Activity 2-4</h1>
<p>Calculator</p>
<form name="form1" action="contact-form.php" method="post">
    <label>Full Name</label>
    <input type="text" name="name" value="" placeholder="" required/>
    <labal>Your Email</labal>
    <input type="email" name="email" value="" placeholder="" required/>
    <label>Subject</label>
    <input type="text" name="subject" value="" placeholder="" required/>
    <label>Message</label>
    <textarea name="message" rows="3" cols="30"></textarea>
    <input type="submit" name="subButton" value="Send"/>
</form>
<?php
if($_POST['subButton'])
{
    // to send HTML mail, you can set the Content-type header.
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $to = "contact@sinndevelopment.com";  // recipient e-mail address
    $subject = $_POST['subject'];
    $email_message = $_POST['message'];

    // additional headers
    $headers .= "From: " . $_POST['name'] . "\r\n";  // from information
    $headers .= " <" . $_POST['email'] . ">"; // e-mail address
    $headers .= "\r\n";

    mail($to, $subject, $email_message, $headers); // send the e-mail function

    echo "<p>Thank you, the e-mail was sent to " . $to . ".</p>";

}
?>
</body>
</html>