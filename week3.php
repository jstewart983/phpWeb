<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	</head>	
<body class = "content">
	<p class = "menu">
	<?php include "menu.php"
	?>
	</p>
	<p align = "left">
	<button onclick="history.go(-1);">Back</button>
	</p>
		<h3><strong>Contact Info</strong></h3>
		<p>
	<form action="memberchoice.php" method = "post">
	<div align = "left">
	<p> Name: <select name="familymember">
	<option value="">[select]</option>
	<option value="Tom">Tom</option>
	<option value="Michele">Michele</option>
	<option value="Jared">Jared</option>
	<option value="Justus">Justus</option>
	<option value="John John">John John</option>
	</select> 
	</form>
	</p>
		<p class="footer">
		<?php include 'footer.php';?>
		</p>
	</body>
		</html>