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
<title>Kura Canteen-Cart Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrapper">
<div class="header">
    <a href="#default" class="logo"> <img src="images/logo.jpg" alt="Whangamata's area school logo"></a>
  <img src="images/heading.jpg" alt="" wdith="60%">
  
</div>

<?php
include "navbar.php";
?>
<div class="row">
  <div class="main">
      

    </div>   
</div>

<?php
include "footer.php";
?>
    </div>
</body>

</html>