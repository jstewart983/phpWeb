<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Jordan Stewart's Website</title>
		<link rel="stylesheet" type="text/css" href="/main.css"/>
</head>
<body class ="content">
<div class = "cmsmenu">
<?php
include 'cmsmenu.php';
?>
<?php
$parrotjig = '<img src = "parrotjig1.jpg" height = "80" width = "180" />';
$flyingfish = '<img src = "flyingfish2.jpg" height = "80" width = "180" />';
$bluetiger = '<img src = "bluetiger3.jpg" height = "80" width = "180" />';
$bluejoy = '<img src = "bluejoy4.jpg" height = "80" width = "180" />';
$partyjig = '<img src = "partyjig5.jpg" height = "80" width = "180" />';
$stealthstrike = '<img src = "stealthstrike6.jpg" height = "80" width = "180" />';
$fireball = '<img src = "fireball7.jpg" height = "80" width = "180" />';
$stripedmenace = '<img src = "stripedmenace8.jpg" height = "80" width = "180" />';
$yellowjacket = '<img src = "yellowjacket9.jpg" height = "80" width = "180" />';
$tigerfish = '<img src = "tigerfish10.jpg" height = "80" width = "180" />';

$lures = array( array(""=>"$parrotjig","name"=>"Parrot Jig", "price"=>"$ ".number_format(8.00 , 2), "qty"=>15),
               array(""=>"$flyingfish","name"=>"Flying Fish", "price"=>"$ ".number_format(13.00 , 2), "qty"=>25),
               array(""=>"$bluetiger","name"=>"Blue Tiger", "price"=>"$ ".number_format(5.00 , 2), "qty"=>10),
               array(""=>"$bluejoy","name"=>"Blue Joy", "price"=>"$ ".number_format(9.00 , 2), "qty"=>7),
               array(""=>"$partyjig","name"=>"Party Jig", "price"=>"$ ".number_format(10.00 , 2), "qty"=>24),
               array(""=>"$stealthstrike","name"=>"Stealth Strike", "price"=>"$ ".number_format(5.00 , 2), "qty"=>10),
               array(""=>"$fireball","name"=>"Fireball", "price"=>"$ ".number_format(6.00 , 2), "qty"=>9),
               array(""=>"$stripedmenace","name"=>"Striped Menace", "price"=>"$ ".number_format(5.00 , 2), "qty"=>40),
               array(""=>"$yellowjacket","name"=>"Yellow Jacket", "price"=>"$ ".number_format(11.00 , 2), "qty"=>18),
               array(""=>"$tigerfish","name"=>"Tiger Fish", "price"=>"$ ".number_format(13.00 , 2), "qty"=>8) 
             ); 
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
<div class = "footer">
<?php 
include 'cmsfooter.php';
?>
</div>
</body>
</html>