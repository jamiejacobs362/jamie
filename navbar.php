<div class="navbar">
<div id="myLinks">
  <a href="index.php">Home</a>
  <a href="order.php">Order</a>
  <a href="suggestions.php">Suggestions</a>
  <a href="cart.php" class="right">Cart</a>
    <?php
    if(isset( $loggedin)){
?>
       <a href="phplogin/logout.php" class="right">Logout</a>  
<?php }
else{ ?>
    <a href="phplogin" class="right">Login</a>
    <?php }
    ?>
 
      
</div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>  
  </a>
    
</div>

