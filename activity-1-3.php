<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jamie Sinn - ICS3UO</title>
    <meta name="description" content="Activity 1-3 - Computer Programming">
    <meta name="author" content="Jamie Sinn">
    <style>
             body {
                 padding: 30px 30px 30px 30px;
                 background-color: #34495e;
                 color: #ffffff;
                 font-family: Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
                 font-size: medium;
             }
    </style>
</head>
<body>
<!-- main content -->
<h1>Styling and Formatting HTML Pages</h1>
<hr>

<p style="color: #8e44ad; background-color: #ffffff;  font-family: Avant Garde,Avantgarde,Century Gothic,CenturyGothic,AppleGothic,sans-serif;">
    In this paragraph the font has been set to <i>Avant Garde, sans-serif;</i> and has a padding of 10px
    and the font colour is #8e44ad and the background colour is #ffffff
</p>

<h2 style="color: #f39c12; background-color: #2980b9; padding: 30px;">
   This is a size 2 heading with a <i>#2980b9</i> colour background and a padding of 30px and a font colour of #f39c12
</h2>

<!-- Please never make me use comic sans ever again... oh the horror!-->
<h3 style="background-color: #888888; color: #ffffff; padding: 5px; width: 700px; font-family: Comic Sans MS, cursive, sans-serif">
    This is a size 3 heading (not a paragraph) with #888888 background colour and Comic Sans MS font that is white (#ffffff) and a padding
    of 5px and the width is only 700px
</h3>

<p style="font-family: Courier; font-size: 2.0em; color: #d35400; background-color: #F0F0F0;">
    In this paragraph the font has been set to a size of <i>2.0em,</i> colour of <i>#d35400</i> and <i>Courier</i> font style.
</p>

<p style="background-color: #1abc9c; color: #ffffff; padding: 5px;">
    This paragraph has a background color of <i>#1abc9c</i> and font color <i>#ffffff</i>
    and the paragraph is padded by 5px. Let's step this up a notch and look at styling tables. Below we are going to create a <i>3 column, 1 row table</i>
    with a border size of <i>2</i>, cellpadding of <i>30</i> and cellspacing of <i>0</i>
</p>

<table border="0" cellpadding="5" cellspacing="0">
    <tr>
        <td style="background-color: #ffffff; color: #000000">
        #ffffff background and #000000 font colour
        </td>
        <td style="background-color: #000000; color: #ffffff">
        #000000 background and #ffffff font colour
        </td>
        <td style="background-color: #f39c12; color: #333333">
        #f39c12 background and #333333 font colour
        </td>
    </tr>
</table>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>