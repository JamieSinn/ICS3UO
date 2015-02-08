<!--
This file is used to have syntax highlighting on the php files, as the IntelliJ plugin does not highlight HTML syntax in a PHP file.
This file will constantly be updated, and will not be on the prod server. Only on the GitHub Repo for teaching and marking purposes.
~ Jamie Sinn 2015-02-08
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>ACTIVITY 1-1 - Jamie Sinn</title>

    <meta name="description" content="Activity 1-1 - Computer Programming">
    <meta name="author" content="Jamie Sinn">

    <style>
        body {
            padding: 20px 20px 20px 20px;

            color: #333333;  /* font color */
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            background-image: url("images/fence.jpg");
        }
        hr {
            display: block;
        }
        table, th, td {
            border: 2px solid black;
        }
        .para1 {
            font-family: Papyrus, fantasy;
            font-size: 1.4em;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
            color: #0355fa;
            background-color: #ffa500;
            padding: 20px;
        }
        .red-text{
            color:#ff0000;
        }
        .blue-text{
            color: #0000ff;
        }
        .green-text{
            color: #00ff00;
        }

    </style>

</head>
<body>
<h1>This is an H1 Title</h1>

<p>THis activity involves creating HTML code that will reproduce this output accurately.
    The body has a 10px padding around the whole thing and the font is "Century Gothic."
    There is a background image: url("http://bglabs.evade.netdna-cdn.com/files/grey-striped-background-2072.png"); as well
    The default links have a link, visited, and active colour of 3e3e3e and text decoration underline.
    The hover state colour is #ffffff (white), no text decoration and background colour of #9400d3.
</p>

<hr>

<h2>HTML is Easy To Learn (h2 title)</h2>

<hr>

<p>Welcome to the world of the <b>World Wide Web.</b> This is the first paragraph. While short it is <i>still</i> a paragraph!</p>
<p>This is the second paragraph. It is also short and boring. Let's create a link to the <a href="http://www.w3schools.com/tags/default.asp">HTML Quick Reference List</a></p>
<p>In the third paragraph we'll try line breaks... <br/>H<br/>e<br/>l<br/>l<br/>o</p>

<ul>
    <li>» Link to <a href="http://google.ca/">google</a></li>
    <li>» Create an email/mailto link to <a href="mailto:braunc@hdsb.ca?subject=I hope the course is fun and challenging">braunc@hdsb.ca</a></li>
</ul>

<p class="para1">"This paragraph has the font "Papyrus", font size of 1.4em, and text colour #0355fa. This paragraph has the class name of "para1". It also has a padding of 20px and a background color of #ffa500
    (orange)</p>
<p>Different colours using the "span" tag: <span class="red-text">class "red-text" and colour #ff0000 -  RED</span> <span class="blue-text"> - class "blue-text" and color #000ff - BLUE -</span>
    <span class="green-text">class "green-text" and color #00ff00 - GREEN</span></p>

<p>Now to the good stuff, <b><i>Unordered Lists</i></b>!</p>
<ul>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>

<p>And <b><i>Ordered Lists</i></b>!</p>
<ol>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ol>

<p>Finally, a basic table</p>

<table>
    <tr>
        <th>Column 1</th>
        <th>Column 2</th>
        <th>Column 3</th>
    </tr>
    <tr>
        <td>text here</td>
        <td>text here</td>
        <td>text here</td>
    </tr>
    <tr>
        <td>text here</td>
        <td>text here</td>
        <td>text here</td>
    </tr>
</table>

<!-- load jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
