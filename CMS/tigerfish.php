<?php
//start output buffering
ob_start();

//start new session
session_start();

//set timezone to CST
date_default_timezone_set('America/Chicago');
?>
<?php
include 'cmsmenu.php';
?>
<div class = "content">
<?php if(isset($_SESSION['loggedintime'])){
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {
				print'<p align = "right"><a href = "cmslogin.php"><b>log in</b></a></p>';
           } 
				?>
</div>
<?php
$tigerfish = '<img src = "tigerfish10.jpg" height = "80" width = "180" />';

$lures = array(array(""=>"$tigerfish","name"=>"Tiger Fish", "price"=>"$ ".number_format(13.00 , 2), "qty"=>"$quantity"," "=>"$add") ); 
?>
</div>
<?php if (count($lures) > 0): ?>
<table align = "center">
  <thead>
    <tr>
      <th><?php echo implode('</th><th align = "right">', array_keys(current($lures))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($lures as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td align="right">', $row); ?></td>
    </tr>
<?php endforeach; ?>
  <tbody>
</table>
<?php endif; ?>
<table class = "content" align ="center">
<tr>
<td><?php 
print '<p>Every one of us Stewarts remembers our first good Crappie fishing trip. They are not the biggest of fish but boy are they are a hoot to reel in one after the other. We designed the Tiger Fish with the fast pace in mind so that you catch alot of fish and you can quickly get your lure back in the water. Have fun.</p>';
?>
</td>
</tr>
</table>
<br />
<div class = "footer">
<?php 
include 'cmsfooter.php';
?>
</div>
<br />
<br />
</body>
</html>
<?php 
ob_end_flush();