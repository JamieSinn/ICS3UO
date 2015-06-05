<?php
include("connectToDB.inc.php");  // open connection to db

// create the sql for the query
$sql = 'CREATE TABLE employee( '.
    'emp_id INT NOT NULL AUTO_INCREMENT, '.
    'emp_name VARCHAR(20) NOT NULL, '.
    'emp_address  VARCHAR(20) NOT NULL, '.
    'emp_salary   INT NOT NULL, '.
    'join_date    timestamp NOT NULL, '.
    'primary key ( emp_id ))';

// query the database
$testQuery = mysql_query("SHOW TABLES LIKE 'employee'");
$exists = mysql_num_rows($testQuery) > 0;
$result = null;
if($exists)
{
    echo "<p>Table <i>employee</i> already exists.</p>";
}
else
{
    $result = mysql_query($sql,$db);
}
if(!empty($result))
{
    echo "<p>table <i>employee</i> has been created.  Check it in your phpMyAdmin.</p>";
}
else
{
    echo "<p>An error occured, the table was not created.</p>";
}

mysql_close($db);  // close db connection
?>