<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<p class="menu">
<?php include 'menu.php';?>
</p>
<p align = "left">
	<button onclick="history.go(-1);">Back </button>
	</p>
<body class = "content">
		<p>
			<h3><strong>My Brother-Jared</strong></h3>
		</p>
		<p><img src="PHP Work/Family Photos/jared.jpg"></p>
		<p>
			<?php
			$aboutJared = array("Born on March 22, 1991","Currently lives in Boca Raton, FL","Attends Palm Beach Atlantic in FL","Loves to play soccer");

			for ($i = 0; $i < count($aboutJared); $i++){
				echo nl2br("-$aboutJared[$i]\n");
			} 
			?>
		</p>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>