<?php
//start output buffering
ob_start();

//start new session
session_start();

//set timezone to CST
date_default_timezone_set('America/Chicago');
?>
   <?php include 'cmsmenu.php';?>
			<table align="center"><tr><td><h2>We Are Fishers Of Men</h2></td><td><img src = "fishingrod.png" height="84" width="84"></td></tr></table>
			<div class = "content">
<?php if(isset($_SESSION['loggedintime'])){
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {
				print'<p align = "right"><a href = "cmslogin.php"><b>log in</b></a></p>';
           } 
				?>
</div>
			
		<table align="center"><tr><td><img src="familyphoto.jpg" width="440" height="307" class="imgframe"></td>
		<td>&nbsp</td>
		<td align = "top">
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
		<td align="top">
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