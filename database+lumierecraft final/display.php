<?php
include 'db.php';

$sql="select * from contact ";
$result=mysql_query($sql,$conn);
if(!$result)
{
	die('Error'.mysql_error());
}
while($row = mysql_fetch_array($result))
{
	echo $row['Sno']."=> ".$row['name']." ; ".$row['emailid']." ; ".$row['address']." ; ".$row['phonenumber']." ; ".$row['itemname']." ; ".$row['comment']."<br>";
}
mysql_close($conn);
?>	
<!DOCTYPE html>
<html>
<head>
<title style="color:blue;font-size:3em">LUMIERE CRAFT</title>
</head>
<body bgcolor="pink">
</body>
</html>	