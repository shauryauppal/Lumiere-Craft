<?php

$servername = "localhost";
$username = "root";
$password = "";
 
//connection to the mysql
$conn = mysql_connect($servername, $username, $password) ;
if (!$conn)
{
	die('Could not connect: '. mysql_error());
	}
	
//connection to the database
$dbName="contactform";
$db = @mysql_select_db($dbName,$conn) or die(mysql_error());
if(!$db)
	die('Error'.mysql_error());

?>