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
<title>Kura Canteen-Suggestions Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
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
include "navbar.php";
?>
 <div class="row">
    <div class="main">
     <h1>Suggestions</h1>

    <form action="action_page.php" method="post"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="john@mail.com"><br><br>
    Suggestion: <textarea name="Suggestion" rows="5" cols="40"></textarea>
<input type="submit" value="Submit">
</form> 
        </div>
    </div>

<?php
include "footer.php";
?>
    </div>
</body>

</html>