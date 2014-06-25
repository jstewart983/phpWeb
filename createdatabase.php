<!DOCTYPE html>
<html>
<head>
	<title>none</title>
</head>
<body>
<?php

$con = mysql_connect("host_name","username","password");

if (!$con){
	die("Cannot connect: " . mysql_error());
}

if (mysql_query("CREATE DATABASE jordanstewart",$con)){
	echo "You have successfully created the database!";
}else echo "Error: " . mysql_error();

mysql_close($con);

?>
</body>
</html>
