<?php 
ob_start(); 
date_default_timezone_set('America/Chicago');
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="/main.css"/>
</head>
<body class = "cmscontent">
<div class="cmsmenu">
	<?php include 'cmsmenu.php';?>
	</div>
	<div align = "center">
	<?php

session_destroy();
print '<p>You are now <i>logged out</i>. Feel free to log in again!</p>
<br />
<br />';

print '<a href ="cmslogin.php"><strong>log in</strong></a>';
?>

</div>
		
		<br />
		<br />
		<br />
		<div class="footer" align = "center">
		<?php include 'cmsfooter.php';?>
		</div>
	</body>
		</html>
		<?php 
		ob_end_flush();
		?>