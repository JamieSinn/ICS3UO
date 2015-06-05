<?php
// database configurations
$db_servername = "localhost";
$db_username = "ics3uo";
$db_password = "qW5?v#TTbZ4-";
$db_databasename = "ics3uo";

//************************************************************************
// Connect to MySQL Database
//************************************************************************
$db = mysql_connect($db_servername,$db_username,$db_password);
if (!$db) {
    die('Could not connect to database: ' . mysql_error());
} else {
    mysql_select_db($db_databasename,$db);
    echo "Successfully connected to the database!"; // remove this in real scripts
}
?>
