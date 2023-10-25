<!DOCTYPE html>
<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION["loggedin"])){
    $loggedin=$_SESSION["loggedin"];
    $name=$_SESSION["name"];
    $id=$_SESSION["id"];
}
//else{header('Location: phplogin/index.html');}
?>
<html lang="en">

<head>
<title>order</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>

<body>
      <div class="wrapper">
<div class="header">
    <a href="#default" class="logo"> <img src="images/logo.jpg" alt="Whangamata's area school logo"></a>
  <img src="images/heading.jpg" alt="" width="60%">
</div>

<?php
include "navbar.php";
?>
<div class="row">
   
  <div class="main">
       <div class="wrapper">
           <?php 
    // Include the setup.php file to establish database connection
    require_once 'setup.php';
    // Fetch records from the "items" table
    $sql = "SELECT * FROM items";
    $stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Display the records in the items table
         while ($row = mysqli_fetch_assoc($result)) { 
             //print_r($row);
         // [id] => 1 [name] => Mac and cheese [price] => 3 [description] => This is our mac and cheese [image] => maccheese.jpg 
        $id = $row['id']; 
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
             print"<div class='gallery'>
  <a target=' blank' href='product.php?id=$id' width='100%'>
    <img src='images/$image' alt='$description' width='100%'>
  </a>
  <div class='desc'> $description</div>
</div>
             ";
     } 

}  ?>
</div>
</div>
</div>
          
    
    
<?php
include "footer.php";
?>
    </div>
</body>

</html>
