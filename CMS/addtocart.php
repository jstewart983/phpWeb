<!--EXAMPLE CART 
Array
(
    [CustomerDetails] => Array
        (
            [customeremail] => me@example.com
            [go] =>  Submit order 
        )

    [OrderLines] => Array
        (
            [0] => Array
                (
                    [productid] => 1
                    [quantity] => 1
                    [price] => 9.99
                    [totprice] => 9.99
                    [productname] => Baseball cap
                )

        )

)-->

<?php
//start output buffering
ob_start();

//start new session
session_start();

//set timezone to CST
date_default_timezone_set('America/Chicago');
?>

<?php
//include the navigation menu
include 'cmsmenu.php';
?>

<div class = "content">
<?php 
//first check if loggedintime is set in session
if(isset($_SESSION['loggedintime'])){

      //if true then make the "logout" link visible and - 
      //display a welcome message and the time when the user logged in
      //Hello there! You have been logged in since $_SESSION['loggedintime']
			print '<p align="right"><a href = "cmslogout.php"><b>log out</b></a></p>';
			print '<p>Hello there! You have been logged in since ' . date('g:i a',$_SESSION['loggedintime']) . '</p>';}
			else {

        //if the loggedintime is not set in the session-
        //display "login" in the upper right hand corner
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
<?php

//check to make sure there are elements in the lures array
 if (count($lures) > 0): 

  ?>
<table align = "center">
  <thead>
    <tr>
      <th>
      <?php 

      //divide the array keys into individual header cells
      echo implode('</th><th>', array_keys(current($lures))); 

      ?>
      </th>
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