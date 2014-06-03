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
	<p align = "left">
	<button onclick="history.go(-1);">Back</button>
	</p>
		<h3><strong>Update Family Member</strong></h3>
		<p>
<select name="mydropdown" class="styled" onChange="document.location = this.value" value="GO">
        <option value="">[select]</option>
        <option value="tomform.php">Tom</option>
        <option value="micheleform.php">Michele</option>
        <option value="jaredform.php">Jared</option>
        <option value="justusform.php">Justus</option>
        <option value="johnjohnform.php">John John</option>
</select>
	</p>
	</div>
			</form>
	</p>
		<p class="footer">
		<?php include 'footer.php';?>
		</p>
	</body>
		</html>