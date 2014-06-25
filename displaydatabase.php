<!DOCTYPE html>
<html>
<head>
	<title>none</title>
</head>
<body>
<?php
date_default_timezone_set('America/Chicago');
$con = mysql_connect("host_name","username","password");

if (!$con){
	die("Cannot connect: " . mysql_error());
}
mysql_select_db("jordanstewart",$con);
$sql = "SELECT * FROM Comments";
$myinfo = mysql_query($sql,$con);

while($data = mysql_fetch_array($myinfo)){
	echo $data['name'];
	echo "<br />";
	echo $data['title'];
	echo "<br />";
	echo $data['comments'];
	echo "<br />";
	echo "Time and Date entered: ";
	echo $data['commentdate'];
	echo "<br />";
}

mysql_close($con);
?>
</body>
</html>
