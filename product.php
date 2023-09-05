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
<title>Product</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 29%;
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
    background-color: white
}

.price {
  color: black;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: royalblue;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  background-color: seagreen;
    
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
include "navbar.php";
          if(isset($_GET['id'])) {
    $id = $_GET['id'];}
    // Include the setup.php file to establish database connection
    require_once 'setup.php';
    // Fetch records from the "items" table
    $sql = "SELECT * FROM items where id=$id";
    $stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
             //print_r($row);
         // [id] => 1 [name] => Mac and cheese [price] => 3 [description] => This is our mac and cheese [image] => maccheese.jpg 
        $id = $row['id']; 
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
}
?>
<div class="row">
   
  <div class="main">
       <div class="wrapper">
        
<h2 style="text-align:center"></h2>

<div class="card">
  <img src="images/<?php print $image; ?>" alt="<?php print $description; ?>" style="width:100%">
  <h1><?php print $name; ?></h1>
  <p class="price">$<?php print $price; ?></p>
  <p><?php print $description; ?>.</p>
  <p><button>Add to Cart</button></p>
</div>
           
           

      
</div>
</div>
</div>
          
    
    
<?php
include "footer.php";
?>
    </div>
</body>

</html>
