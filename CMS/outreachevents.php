<?php 
ob_start();
session_start();
date_default_timezone_set('America/Chicago');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="/main.css"/>
</head>
<body class = "content">
   <div class = "cmsmenu"><?php include 'cmsmenu.php';?></div>
			<p><b>Upcoming Events</b></p>
			<div class = "content">
<?php if(isset($_SESSION['loggedintime'])){
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {
				print'<p align = "right"><a href = "cmslogin.php"><b>log in</b></a></p>';
           } 
				?>
</div>
			
		<table align="center"><tr><td><i>CONTENT</i></td>
		</tr>
		<tr>
		<td align="center">CONTENT</td>
		</tr> 
		</table>
		<br />
		<p class="footer">
		<?php include 'cmsfooter.php';?>
		</p>
	</body>
		</html>
		<?php
		ob_end_flush();
		 ?>