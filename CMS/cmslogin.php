<?php 
ob_start(); 
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
<body class = "cmscontent">
<div class="cmsmenu">
	<?php include 'cmsmenu.php';?>
	</div>
	<div align = "center">
	<?php 
// Print some introductory text:
print '<h2>login</h2>
	<p>If you log in you will be able to add items to your shopping cart and ultimately purchase those items if you so desire.</p>';
$loggedin = False;
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Handle the form:
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {

		if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) { // Correct!

			$loggedin = True;

			session_start();
			$_SESSION['email']=$_POST['email'];
			$_SESSION['status']=$loggedin;
			//$_SESSION['cart']=$cart = array();
			ob_end_clean();
			header ('Location: store.php');
			exit();
	
		} else { // Incorrect!

			print '<p>The submitted email address and password do not match those on file!<br />Go back and try again.</p>';
	
		}

	} else { // Forgot a field.

		print '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
	
	}

} else { // Display the form.

	print '<table><form action="cmslogin.php" method="post">
	<tr><td align ="right">Email Address: <input type="text" name="email" size="20" /></td></tr>
	<tr><td align ="right">Password: <input type="password" name="password" size="20" /></td></tr>
	<tr><td align = "center"><input type="submit" name="submit" value="Log In!" /></td></tr>
	</form></table>';

}

?></div>
		
		<br />

		<div class="footer" align="center">
		<?php include 'cmsfooter.php';?>
		</div>
	</body>
		</html>
		<?php 
		ob_end_flush();
		?>