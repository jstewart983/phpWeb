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
$partyjig = '<img src = "partyjig5.jpg" height = "80" width = "180" />';
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
$lures = array(array(""=>"$partyjig","name"=>"Party Jig", "price"=>"$ ".number_format(10.00 , 2), "qty"=>"$quantity"," "=>"$add")); 
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
print '<p>We call this lure the Party Jig for one reason: reeling in a giant Muskey is always a party on a Stewart Family boat.</p>';
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