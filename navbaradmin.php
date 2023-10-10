<div class="navbar">
<div id="myLinks">
  <a href="index.php">Home</a>
    <a href="admin.php">Admin login</a>
  <a href="listinvoices.php">Order list</a>
 
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

