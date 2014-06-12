<?php
//start output buffering
ob_start();

//start new session
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

           if (isset($_POST['addtocart'])) {
        $item_name = $_POST['item_name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        $newItem = $item_name.":".$price.":".$qty;
        //echo $newItem;

        if (isset($_SESSION['shop_session'])) {
          array_push($shop_session, $newItem);
          //header('Location: cart.php');
          print_r($shop_session);
        }
        else {
            array_push($temp_session, $newItem);
          //header('Location: login.php?notLoggedIn=true');
          print_r($temp_session);
        }
      }
				?>
</div>
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