<?php 
ob_start();
session_start();
date_default_timezone_set('America/Chicago');
?>
<?php include 'cmsmenu.php';?>
			<table align="center"><tr><td><h2>Upcoming Events</h2></td><td><img src = "fishingrod.png" height="84" width="84"></td></tr></table>
			<div class = "content">
<?php if(isset($_SESSION['loggedintime'])){
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {
				print'<p align = "right"><a href = "cmslogin.php"><b>log in</b></a></p>';
           } 
				?>
</div>
			
		<table align="center"><tr><td><i>CONTENT</i></td>
		</tr>
		<tr>
		<td align="center"><i>CONTENT</i></td>
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