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
	<div class = "menu">
	<?php 
	include 'menu.php';
	?>
	</div>
	<div align = "center">
	<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	
	if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {

		if ( (strtolower($_POST['username']) == 'jordanstewart') && ($_POST['password'] == 'administrator') ) { 

			session_start();
			$_SESSION['username']=$_POST['username'];
			$_SESSION['status']=$loggedin;
			$_SESSION['loggedintime']=time();
			ob_end_clean();
			header ('Location: familytree.php');
			exit();
	
		} 
		else 
		{ 

			print '<p>Your username or password is incorrect! Try again!</p>';
	
		}

	} 
	else 
	{ 

		print '<p>You forgot to enter either your username or your password. Please try again!</p>';
	
	}

} 
else 
{ 

	print '<br />
	<table>
<tr align = "center">
	<td>
		Login
	</td>

</tr>
<tr>
<td>
	<form action="familytreelogin.php" method="post">
	<tr><td align ="right">username: <input type="text" name="username" size="30" /></td></tr>
	<tr><td align ="right">password:<input type="password" name="password" size="30" /></td></tr>
	<tr><td align = "center">
	<input type="submit" name="submit" value="log in" /></td></tr>
	</form>
</td>
</tr>
	
</table>';

}

?>
</div>
<br />
<div class = "footer" align="center">
	<?php
include 'footer.php';
 ?>
</div>

</body>
</html>

 <?php 
		ob_end_flush();
		?>
