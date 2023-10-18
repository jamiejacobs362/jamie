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
<title>Kura Canteen-Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 32%;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

</head>

<body>
    
    <div class="wrapper">
<div class="header">
    <a href="#default" class="logo"> <img src="images/logo.jpg" alt="Whangamata's area school logo"></a>
  <img src="images/heading.jpg" alt="" width="60%">

</div>

<?php
        if (isset($loggedin) and $id == 1){
            include "navbaradmin.php";
        }
        else {
        
            include "navbar.php";
        }
?>
 <div class="row">
    <div class="main">
        <?php
            // Include the setup.php file to establish database connection
    require_once 'setup.php';
    // Fetch records from the "contacts" table
    $sql = "SELECT * FROM pages where id=1";
    $stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        $title1= $row['title1'];
        $image1= $row['image1'];
        $image2= $row['image2'];
        $image3= $row['image3'];
        }}
        ?>
        
        <h2><?php echo $title1; ?></h2>
    
    <div class="gallery">
  <a target="_blank" href="order.php">
    <img src="images/<?php echo $image1; ?>" alt="Shelf where food avabile is shown" width="100%">
  </a>
</div> 

    <div class="gallery">
  <a target="_blank" href="order.php">
    <img src="images/<?php echo $image2; ?>" alt="Shelf where food avabile is shown" width="100%">
  </a>
</div> 
        
<div    class="gallery">
  <a target="_blank" href="order.php">
    <img src="images/<?php echo $image3; ?>" alt="Shelf where food avabile is shown" width="100%">
  </a>
</div>
</div>
</div>

<?php
include "footer.php";
?>
    </div>
</body>

</html>