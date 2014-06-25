<?php
//connect to the database server
$con = mysql_connect("host_name","username","password");
if (!$con){
	die("Could not connect " . mysql_error());
}
//select the jordanstewart database
mysql_select_db("jordanstewart",$con);

//create comments table
$table = "CREATE TABLE Comments (
	fieldID int(20),
	name varchar(20),
	title varchar(20),
	comments varchar(100),
	commentdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

mysql_query($table,$con);
//close the connection
mysql_close($con);
?>