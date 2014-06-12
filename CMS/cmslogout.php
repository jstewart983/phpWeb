<?php 
ob_start(); 
date_default_timezone_set('America/Chicago');
session_start();
?>
	<?php include 'cmsmenu.php';?>
	<div align = "center">
	<?php

session_destroy();
print '<p>You are now <i>logged out</i>. Feel free to log in again!</p>
<br />
<br />';

print '<a href ="cmslogin.php"><strong>log in</strong></a>';
?>

</div>
		
		<br />
		<br />
		<br />
		<div class="footer" align = "center">
		<?php include 'cmsfooter.php';?>
		</div>
	</body>
		</html>
		<?php 
		ob_end_flush();
		?>