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
		<h3><strong>My Brother-Justus</strong></h3>
		</p>
		<p><img src="PHP Work/Family Photos/justus.jpg"></p>
		<p>
			<?php
$about1 = $about2 = $about3 = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			   $about1 = test_input($_POST["about1"]);
			   $about2 = test_input($_POST["about2"]);
			   $about3 = test_input($_POST["about3"]);

				}

				function test_input($data) {
				   $data = trim($data);
				   $data = stripslashes($data);
				   $data = htmlspecialchars($data);
				   return $data;
				}
				$about1 = $_POST['about1'];
				$about2 = $_POST['about2'];
				$about3 = $_POST['about3'];

			$aboutJustus = array("Is a Sophomore at Sienna Heights University in MI ","Is an excellent singer","Has a soccer scholarship","Going to school to be a nurse");
array_push($aboutJustus,$about1,$about2,$about3);
			for ($i = 0; $i < count($aboutJustus); $i++){
				echo nl2br("-$aboutJustus[$i]\n");
				}
			?>
		</p>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>