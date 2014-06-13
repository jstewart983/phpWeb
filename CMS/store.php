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
<table align="center"><tr><td><h2>Our Lures</h2></td><td><img src = "fishingrod.png" height="84" width="84"></td></tr></table>
<?php if(isset($_SESSION['loggedintime'])){
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {
				print'<p align = "right"><a href = "cmslogin.php"><b>log in</b></a></p>';
           } 
				?>
</div>
<?php
$parrotjig = '<a href = "parrotjig.php"><img src = "parrotjig1.jpg" height = "80" width = "180" /></a>';
$flyingfish = '<a href ="flyingfish.php"><img src = "flyingfish2.jpg" height = "80" width = "180" /></a>';
$bluetiger = '<a href = "bluetiger.php"><img src = "bluetiger3.jpg" height = "80" width = "180" /></a>';
$bluejoy = '<a href = "bluejoy.php"><img src = "bluejoy4.jpg" height = "80" width = "180" /></a>';
$partyjig = '<a href = "partyjig.php"><img src = "partyjig5.jpg" height = "80" width = "180" /></a>';
$stealthstrike = '<a href = "stealthstrike.php"><img src = "stealthstrike6.jpg" height = "80" width = "180" /></a>';
$fireball = '<a href = "fireball.php"><img src = "fireball7.jpg" height = "80" width = "180" /></a>';
$stripedmenace = '<a href = "stripedmenace.php"><img src = "stripedmenace8.jpg" height = "80" width = "180" /></a>';
$yellowjacket = '<a href = "yellowjacket.php"><img src = "yellowjacket9.jpg" height = "80" width = "180" /></a>';
$tigerfish = '<a href = "tigerfish.php"><img src = "tigerfish10.jpg" height = "80" width = "180" /></a>';

if(isset($_SESSION['loggedintime'])){
  $quantity ='<form method="post" action="cart.php">
          <input type="hidden" name="productid" value="1" />
          <select name="quantity">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>';
          $add = '<input type="submit" value="add to cart" name="buybtn" />
        </form>';
}
else{
$quantity ='';
$add = '';
}
$lures = array( array(""=>"$parrotjig","name"=>"Parrot Jig", "price"=>"$ ".number_format(8.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$flyingfish","name"=>"Flying Fish", "price"=>"$ ".number_format(13.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$bluetiger","name"=>"Blue Tiger", "price"=>"$ ".number_format(5.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$bluejoy","name"=>"Blue Joy", "price"=>"$ ".number_format(9.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$partyjig","name"=>"Party Jig", "price"=>"$ ".number_format(10.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$stealthstrike","name"=>"Stealth Strike", "price"=>"$ ".number_format(5.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$fireball","name"=>"Fireball", "price"=>"$ ".number_format(6.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$stripedmenace","name"=>"Striped Menace", "price"=>"$ ".number_format(5.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$yellowjacket","name"=>"Yellow Jacket", "price"=>"$ ".number_format(11.00 , 2), "qty"=>"$quantity"," "=>"$add"),
               array(""=>"$tigerfish","name"=>"Tiger Fish", "price"=>"$ ".number_format(13.00 , 2), "qty"=>"$quantity"," "=>"$add") 
             ); 
?>
</div>
<p align = "center">click on the lure for more info</p>
<br />
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
      <td><?php echo implode('</td><td align = "right">', $row); ?></td>
    </tr>
<?php endforeach; ?>
  <tbody>
</table>
<?php endif; ?>
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
?>