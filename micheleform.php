<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<p class = "menu">
<?php include 'menu.php';?>
</p>
	<p align = "left">
	<button class = "button" onclick="history.go(-1);">Back</button>
	</p>
<body class = "content">
		<p>
		<h3><strong>My Mom-Michele</strong></h3>
		</p>
		<p><img src="PHP Work/Family Photos/michele.jpg"></p>
			<form action = "michele.php" method="post">
			<p>About 1: <input type="text" name ="about1" size="20"/></p>
			<p>About 2: <input type="text" name="about2" size="20" /></p>
			<p>About 3: <input type="text" name="about3" size="20" /></p>
			<input type="submit" name="submit" value="Update" />
			</form>
		</p>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>