<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Your Movie Ratings</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<p class="menu">
<?php include 'menu.php';?>
</p>
<body>
	<p align = "left">
	<button onclick="history.go(-1);">Back</button>
	</p>
<?php  
// define variables and set to empty values
$career = $movie = $sport = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $career = test_input($_POST["career"]);
   $movie = test_input($_POST["movie"]);
   $sport = test_input($_POST["sport"]);
  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$career = $_POST['career'];
$movie = $_POST['movie'];
$sport = $_POST['sport'];

print "<p>$career</p>";



?>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>