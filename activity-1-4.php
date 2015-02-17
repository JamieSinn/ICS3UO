<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<title>Activity 1.4 Big Mac Attack</title>

<meta name="description" content="Big Mac Attack! Table Formatting">
<meta name="author" content="Jamie Sinn">

<link rel="shortcut icon" href="http://bit.ly/14jpviZ" />


<style>
    body {
        padding: 20px 20px 20px 20px;
        background-color: #333333;
        color: #ffffff;
        font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
    }
</style>

</head>
<body>



    <h1>Big Mac Attack!</h1>
    <h2>Table Formatting Activity</h2>
    <table border="1" cellspacing="0" cellpadding="0" width="900" height="600">
        <!-- First Row, three columns, middle red column is set to 150px wide.-->
        <tr>
            <td bgcolor="#3498db" align="left">
                <img src="images/bigmac.png"/>
            </td>
            <td bgcolor="#c0392b" width="150px" valign="top" align="right">
                <img src="images/bigmac.png"/>
            </td>
            <td bgcolor="#f1c40f" valign="bottom" align="center">
                <img src="images/bigmac.png"/>
            </td>
        </tr>
        <!-- Second Row, One merged column, centered.-->
        <tr>
            <td colspan="3" bgcolor="#95a5a6" align="center">
                <img src="images/bigmac.png"/>
            </td>
        </tr>
        <!-- Third Row, only two columns, one -->
        <tr>
            <td bgcolor="#f39c12" valign="bottom" align="left">
                <img src="images/bigmac.png"/>
            </td>
            <td colspan="2" bgcolor="#2c3e50" valign="top" align="right">
                <img src="images/bigmac.png"/>
            </td>
        </tr>
    </table>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>