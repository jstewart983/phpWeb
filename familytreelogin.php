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
		<title>The Fishers Of Men Project</title>
		<link rel="stylesheet" type="text/css" href="/main.css"/>
</head>
<body class = "content">
<?php
if(!empty($_POST['username'])) 
print '<table>
<tr>
	<td>
		Login
	</td>

</tr>
<tr>
<td>
	<form action="cmslogin.php" method="post">
	<tr><td align ="right">username: <input type="text" name="email" size="20" /></td></tr>
	<tr><td align ="right">password:<input type="password" name="password" size="20" /></td></tr>
	<tr><td align = "center">
	<input type="submit" name="submit" value="log in" /></td></tr>
	</form>;
</td>
</tr>
	
</table>'
?>
</body>
<?php
include 'menu.php';
 ?>
