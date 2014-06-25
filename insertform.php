<!DOCTYPE html>
<html>
<head>
	<title>test form</title>
</head>
<body>
<form action="insertform.php" method="post">
Name: <input type="text" name= "name"><br />
Title: <input type="text" name="title"><br />
Comments: <input type="textarea" name="comments">
<input type="submit" name = "submit">
</form>
<?php
date_default_timezone_set('America/Chicago');
if(isset($_POST['submit'])){
//connect to the database server
$con = mysql_connect("host_name","username","password");
if (!$con){
	die("Could not connect " . mysql_error());
}
//select the jordanstewart database
mysql_select_db("jordanstewart",$con);

//create comments table
$table = "INSERT INTO Comments (name,title,comments) VALUES ('$_POST[name]','$_POST[title]','$_POST[comments]')";


mysql_query($table,$con);

//close the connectioni
mysql_close($con);
}
?>
</body>
</html>

