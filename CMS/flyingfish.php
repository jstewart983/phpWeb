<?php
ob_start();
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="/main.css"/>
</head>
<body class ="cmscontent">
<div class = "cmsmenu">
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
$flyingfish = '<img src = "flyingfish2.jpg" height = "80" width = "180" />';

$lures = array(array(""=>"$flyingfish","name"=>"Flying Fish", "price"=>"$ ".number_format(13.00 , 2), "qty"=>25)); 
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
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  <tbody>
</table>
<?php endif; ?>
<table class = "content" align ="center">
<tr>
<td><?php 
print '<p>If you like to fish for largemouth bass then this is the lure for you. We have caught more bass than we can count with this lure and we know you will too.</p>';
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