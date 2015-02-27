<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Activity 1.5 - CSS Tips & Tricks Practice</title>

    <meta name="description" content="More about CSS">
    <meta name="author" content="Jamie Sinn">

    <!-- styles - internal (not linked) -->
    <style>
        body {
            padding: 20px 20px 20px 20px;
            color: #333333;  /* font color */
            font-family: Calibri;
            /* css backgrounds...http://lea.verou.me/css3patterns/ */
            background-color: gray;
            background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.5) 50%);
            background-size: 50px 50px;
        }
        a.teacher-button:link, a.teacher-button:visited , a.teacher-button:active {
            position: relative;
            display: inline-block;
            padding: 1%;
            margin: 2%; /* 2px around the outside of the link */
            background-image: linear-gradient(to top right, #f06d06, #ffffff);
            color: #333333;
            font-size: 2.1em; /* 210% of normal size */
            text-decoration: none;  /* underline or none */
            font-family: Calibri;
            border-radius: 0 0.2em 0 0.2em; /*Top/Right/Botton/Left */
            -moz-border-radius: 0.3em 0.3em 0.3em 0.3em;
            -webkit-border-radius: 0.3em 0.3em 0.3em 0.3em;
        }
        a.teacher-button:hover {
            background: #ffffff;
            color: #f06d06;
            box-shadow: 5px 5px 5px #222222;
            -webkit-box-shadow: 5px 5px 5px #222222;
            -moz-box-shadow: 5px 5px 5px #222222;
        }

        /* style the paragraph */
        p.norm {
            position: relative;
            display: inline-block;
            padding: 1%;
            margin: 2%;
            background: rgba(0,0,0,0.7);
            color: #ffffff;
        }

        /* your button styles */
        a.button1:link, a.button1:visited , a.button1:active {
            position: relative;
            display: inline-block;
            padding: 4%;
            margin: 2%;

            background-image: radial-gradient(circle, #fff00a, #ffffff);
            color: #232323;
            font-family: Arial;
            text-decoration: none;
            border-radius: 0 0.1em 0 0.1em;
            -moz-border-radius: 0.2em 0.2em 0.2em 0.2em;
            -webkit-border-radius: 0.3em 0.3em 0.3em 0.3em;
        }
        a.button1:hover {
            -moz-border-radius: 3px 3px 3px 3px;
            -moz-box-shadow: #232323;
            text-decoration: dashed;
            box-shadow: 5px 5px 5px #232323;
            -webkit-box-shadow: 5px 5px 5px #232323;
        }
        a.button2:link, a.button2:visited , a.button2:active {
            display: block;
            padding: 5%;
            color: #70ffa7;
            background-color: #222222;
        }
        a.button2:hover {
            text-decoration: blink;
            text-blink: 2s;
        }
        a.button3:link, a.button3:visited , a.button3:active {
            color: darkcyan;
            font-size: 3.1em;
            padding: 3px;
            height: 10px;
            background-color: #1abc9c;

        }
        a.button3:hover {
            font-size: 3.1em;
            background-color: #222222;
            color: azure;
        }
    </style>

</head>
<body>
    <!-- main content -->
    <div id="home">
        <h1>Styling Links &amp; Other Cool Stuff</h1>
        <p class="norm">
            In this activity you will create at least one other link style with a defined class.
            From this point forward all of your links on your activities must be styled.
            You may want to research other css properties to further understand the cool styles you can add.
        </p>
    </div>
    <h2>Teacher's Link</h2>
    <a href="http://actonhighschool.ca" class="teacher-button">TEACHER'S LINK</a><br />
    <h2>My Links</h2>
    <a href="#home" class="button1">Div Link</a>
    <br />
    <a href="http://i.imgur.com/d3IJ0LL.png" class="button2">Dilbert Joke</a>
    <img src="http://i.imgur.com/d3IJ0LL.png"/>
    <br />
    <a href="http://lmgtfy.com" class="button3">Let me Google that for you.</a>
    <!-- /main content -->

<!-- load jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>