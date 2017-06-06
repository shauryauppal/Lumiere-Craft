<?php
include 'db.php';

// Create table
$sql = "CREATE TABLE contact(name varchar(20),
			      emailid varchar(50),
				  address varchar(200),
				  phonenumber int,
				  itemname varchar(30),
				  comment varchar(600))";

// Execute SQL statement  
$check=mysql_query($sql, $conn);
if(!$check)
{
	die("Error".mysql_error());
}
?>