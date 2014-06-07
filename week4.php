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
	<div align = "left">
	<a class = "button" onclick="history.go(-1);" title = "Previous Page">Back</a>
	</div>
	<br />
		<h3>CMS Part 1</h3>
		<br />
    <p>
    <div>
 	<a class = "button" href="/cmshome.php" title="CMS Link">Enter
 </a>
</div>
<div>
<a href = "practicepage.php">Array Practice</a>
</div>
    </p>
	</p>
	<br />
	<br />
	<br />
	<div><p>Use this form to add an event:</p>

<?php // Script 8.8 - login.php
/* This page lets people log into the site (in theory). */

// Set the page title and include the header file:
define('TITLE', 'Login');

// Print some introductory text:
print '<h2>Login Form</h2>
	<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Handle the form:
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {

		if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) { // Correct!

			print '<p>You are logged in!<br />Now you can blah, blah, blah...</p>';
	
		} else { // Incorrect!

			print '<p>The submitted email address and password do not match those on file!<br />Go back and try again.</p>';
	
		}

	} else { // Forgot a field.

		print '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
	
	}

} else { // Display the form.

	print '<form action="login.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" /></p>
	<p>Password: <input type="password" name="password" size="20" /></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	</form>';

}

?>
		<p>
		<?php include 'footer.php';?>
		</p>
	</body>
		</html>
