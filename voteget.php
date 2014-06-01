
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	</head>
	<div class = "menu">
	<?php include "menu.php"
	?>
	</div>
	<p align = "left">
	<button onclick="history.go(-1);">Back</button>
	</p>
<body class = "content"><p align = "left">**********GET METHOD**********</p>
<p align="left">Please rate these five movies:</p>
<form action="feedbackget.php" method = "get">
<div align = "left">
	<p> Name: <select name="title">
	<option value="Mr.">Mr.</option>
	<option value="Mrs.">Mrs.</option>
	<option value="Ms.">Ms.</option>
	</select> 
	<input type="text" name="name" size="20" /></p>

	<p>Email Address: <input type="text" name="email" size="20" /></p>
	
	<p>The Hobbit: This movie was...	
	<input type="radio" name="response1" value="excellent" /> excellent
	<input type="radio" name="response1" value="okay" /> okay
	<input type="radio" name="response1" value="boring" /> boring</p>
	
	<p>Batman Begins: This movie was...	
	<input type="radio" name="response2" value="excellent" /> excellent
	<input type="radio" name="response2" value="okay" /> okay
	<input type="radio" name="response2" value="boring" /> boring</p>
	
	<p>Land Before Time: This movie was...	
	<input type="radio" name="response3" value="excellent" /> excellent
	<input type="radio" name="response3" value="okay" /> okay
	<input type="radio" name="response3" value="boring" /> boring</p>
	
	<p>Dan in Real Life: This movie was...	
	<input type="radio" name="response4" value="excellent" /> excellent
	<input type="radio" name="response4" value="okay" /> okay
	<input type="radio" name="response4" value="boring" /> boring</p>
	
	<p>What About Bob: This movie was...	
	<input type="radio" name="response5" value="excellent" /> excellent
	<input type="radio" name="response5" value="okay" /> okay
	<input type="radio" name="response5" value="boring" /> boring</p>
	
	<p>Comments: <textarea name="comments" rows="3" cols="30"></textarea></p>

	<input type="submit" name="submit" value="Send My Feedback" />
</div>
</form>
</div>
</body>
<div class = "footer">
	<?php include "footer.php"
	?>
</div>
		</html>