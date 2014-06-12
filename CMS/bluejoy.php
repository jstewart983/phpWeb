<?php
ob_start();
session_start();
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
$bluejoy = '<img src = "bluejoy4.jpg" height = "80" width = "180" />';

$lures = array( array(""=>"$bluejoy","name"=>"Blue Joy", "price"=>"$ ".number_format(9.00 , 2), "qty"=>7)); 
?>
</div>
<?php if (count($lures) > 0): ?>
<table align = "center">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($lures))); ?></th>
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
print '<p>The Blue Joy is ideal for trolling across the lake in search of monstrous Pike. Trust us when we say that this lure works.</p>';
print '<br /><p><button><a href = "addtocart.php">add to cart</a></button></p>';
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