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
	<button onclick="history.go(-1);">Back </button>
	</p>
		<body class="content">
		<p>
		<h3><strong>My Mom-Michele</strong></h3>
		</p>
		<p><img src="PHP Work/Family Photos/michele.jpg"></p>
			<p>
			<?php
			$aboutMichele = array("Grew up in New Jersey","Works at Central Elementary as a playground supervisor","Is half Greek and half Puerto Rican ","Collects Vera Bradley");
			for ($i = 0; $i < count($aboutMichele); $i++){
				echo nl2br("-$aboutMichele[$i]\n");
			}
			?>
		</p>
		</body>
		<p class= "footer">
		<?php include 'footer.php';?>
		</p>
		</html>