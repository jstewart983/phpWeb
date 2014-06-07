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
	<button class = "button" onclick="history.go(-1);">Back</button>
	</p>
<body class = "content" >
		<p>
		<h3>
		<strong>My Brother-John John</strong>
		</h3>
		</p>
		<p><img src="PHP Work/Family Photos/johnjohn.jpg"></p>
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

			$aboutJohn = array("Is a 7th grader at Flushing Middle School","13 years old","Loves to play soccer and basketball","Best friend is Max");
			array_push($aboutJohn,$about1,$about2,$about3);
			for($i = 0; $i < count($aboutJohn);$i++) {
				echo nl2br("-$aboutJohn[$i]\n");
			}
		 ?>
		 </p>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>