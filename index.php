<!DOCTYPE html>

<html lang="en">

<head>
<title>Kura Canteen-Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
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
  <p>A website created by me.</p>
</div>

<?php
include "navbar.php";
?>
 <div class="row">
    <div class="main">
    <div class="gallery">
  <a target="_blank" href="images/shelf1.jpg">
    <img src="images/shelf1.jpg" alt="Shelf where food avabile is shown" width="100%">
  </a>
</div> 

    <div class="gallery">
  <a target="_blank" href="images/shelf2.jpg">
    <img src="images/shelf2.jpg" alt="Shelf where food avabile is shown" width="100%">
  </a>
</div> 
        
<div class="gallery">
  <a target="_blank" href="images/shelf3.jpg">
    <img src="images/shelf3.jpg" alt="Shelf where food avabile is shown" width="100%">
  </a>
</div>
</div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>
    </div>
</body>

</html>