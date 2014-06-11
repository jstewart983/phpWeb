<?php 
ob_start();
session_start();
date_default_timezone_set('America/Chicago');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>The Fishers Of Men Project</title>
		<link rel="stylesheet" type="text/css" href="/main.css"/>
</head>
<body class = "content">
   <div class = "cmsmenu"><?php include 'cmsmenu.php';?></div>
			<p><b>We Are Fishers Of Men</b></p>
			<div class = "content">
<?php if(isset($_SESSION['loggedintime'])){
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {
				print'<p align = "right"><a href = "cmslogin.php"><b>log in</b></a></p>';
           } 
				?>
</div>
			
		<table align="center"><tr><td><img src="familyphoto.jpg" width="440" height="298" class="imgframe"></td>
		<td>&nbsp</td>
		<td align = "left">
		The Fishers Of Men Project is a family run not for profit organization committed to fulfilling our calling here on earth.
		Our mission is share the good news of Jesus Christ utilizing the metaphor of fishing. We host fishing events to teach people the
		practical skill of fishing and we also share the word with those who attend. Additionally, we sell our hand made lures in our online
		store which we donate <strong>100%</strong> of the proceeds to missions organizations all over the world.
		</td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		</tr>
		<tr>
		<td>
		<img src="tomanddean.jpg" width="440" height="280" class="imgframe">
		</td>
		<td>&nbsp</td>
		<td align="left">
		Our family has been fishing for over 50 years. We have fished all over the US of A. Having such a large family has enabled
		us to compile all the best practices for catching the most fish and catching the biggest fish. Our events include many different strategy
		tutorials as well as a great message by our pastor in the family. Our hand made lures are some of the best in the industry with years of 
		testing design all done in house by Stewart fishermen.
		</td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		</tr> 
		</table>
		<br />
		<p class="footer">
		<?php include 'cmsfooter.php';?>
		</p>
	</body>
		</html>
		<?php
		ob_end_flush();
		 ?>