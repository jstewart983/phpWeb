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
<body class = "content">
		<p>
		<h3><strong>My Dad-Tom</strong></h3>
		</p>
		<p><img src="PHP Work/Family Photos/tom.jpg"></p>
			<p>
			<?php
			$aboutTom = array("Career: Works at Uponor as Regional Sales Manager for the southern region","Has 7 brothers and sisters","Plays guitar","Loves to bow hunt");
			for ($i = 0; $i < count($aboutTom); $i++){
				echo nl2br("$aboutTom[$i]\n");
				
			} 

			?>
		</p>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>