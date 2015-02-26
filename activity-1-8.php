<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity 1.8 - Embedding with iFrames</title>
    <meta name="description" content="Activity 1.8 - Putting it all together">
    <meta name="author" content="Jamie Sinn">
    <link rel="stylesheet" href="styles.css?v=1.0">

</head>
<style>
    body{
        background-image: url("images/blackbg.jpg");
    }
    ul{
        box-shadow: #34495e;
        text-shadow: darkgrey;
    }
</style>
<body>

<table width="900px">
    <tr>
        <td colspan="2" bgcolor="#a9a9a9">Putting it all together</td>
    </tr>
    <tr bgcolor="white">
        <td valign="top">
            <img src="images/IMG_8865.JPG"/><br/>
            <p></p>
        </td>
        <td valign="top"><iframe width="640" height="360" src="https://www.youtube.com/embed/XVjeOTKeAjw?feature=player_embedded" frameborder="0" allowfullscreen align="center">
            </iframe>
            <p>This, as it was in the last project, is my favourite song due to how much variety it has in the music, and how melodic it is at the rather intense points.</p>
        </td>
    </tr>
    <tr bgcolor="white">
        <td valign="top">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </td>
        <td valign="top">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83328.80618138779!2d-123.12391349999999!3d49.256968400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C+BC!5e0!3m2!1sen!2sca!4v1424269873892" width="600" height="450" frameborder="0" style="border:0">
            </iframe>
            <p>I grew up in North Vancouver, and I love going back to Vancouver every summer.</p>
        </td>
    </tr>
</table>
<!-- load jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>