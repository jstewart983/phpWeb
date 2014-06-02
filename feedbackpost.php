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
$response1 = $response2 = $response4 = $response5 = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $response1 = test_input($_POST["response1"]);
   $response2 = test_input($_POST["response2"]);
   $response3 = test_input($_POST["response3"]);
   $response4 = test_input($_POST["response4"]);
   $response5 = test_input($_POST["response5"]);
   $comments = test_input($_POST["comments"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$title = $_POST['title'];
$name = $_POST['name'];
$response1 = $_POST['response1'];
$response2 = $_POST['response2'];
$response3 = $_POST['response3'];
$response4 = $_POST['response4'];
$response5 = $_POST['response5'];
$comments = $_POST['comments'];

print "<p>Thank you, $title $name, for rating these movies.</p>
<p>You thought The Hobbit was $response1.<br></p>
<p>You thought Batman Begins was $response2.<br>
<p>You thought The Land Before Time was $response3.<br></p>
<p>You thought Dan in Real Life was $response4.<br></p>
<p>You thought What About Bob was $response5.<br></p>
<p>You also commented: $comments.<br></p>";

?>
</body>
<p class = "footer">
<?php include 'footer.php';?>
</p>
</html>