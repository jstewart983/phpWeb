<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Your Movie Ratings</title>
</head>
<body>
	<p align = "left">
	<button onclick="history.go(-1);">Back</button>
	</p>
<?php  
//assign $_GET array values to simple variables
$title = $_GET['title'];
$name = $_GET['name'];
$response1 = $_GET['response1'];
$response2 = $_GET['response2'];
$response3 = $_GET['response3'];
$response4 = $_GET['response4'];
$response5 = $_GET['response5'];
$comments = $_GET['comments'];

print "<p>Thank you, $title $name, for rating these movies.</p>
<p>You thought The Hobbit was $response1.<br></p>
<p>You thought Batman Begins was $response2.<br>
<p>You thought The Land Before Time was $response3.<br></p>
<p>You thought Dan in Real Life was $response4.<br></p>
<p>You thought What About Bob was $response5.<br></p>
<p>You also commented: $comments.<br></p>";

?>
</body>
</html>