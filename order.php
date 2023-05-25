<!DOCTYPE html>

<html lang="en">

<head>
<title>order</title>
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
  <a target="_blank" href="images/mac&cheese.jpg">
    <img src="images/mac&cheese.jpg" alt="mac&cheese" width="100%">
  </a>
  <div class="desc">This our juicie</div>
        <div class="gallery">
  <a target="_blank" href="images/juicie.jpg" width="100%">
    <img src="images/juicie.jpg" alt="juicie" width="100%">
  </a>
  <div class="desc">This our water</div>
</div>
</div>
<div class="gallery">
  <a target="_blank" href="images/water.jpg">
    <img src="images/water.jpg" alt="water" width="100%">
  </a>
  <div class="desc">This our water</div>
    
     <div class="gallery">
  <a target="_blank" href="images/juicie2.jpg">
    <img src="images/juicie2.jpg" alt="juicie" width="100%">
  </a>
  <div class="desc">This our juicie</div>
</div>
</div>
      <div class="gallery">
  <a target="_blank" href="images/hotdog.jpg">
    <img src="images/hotdog.jpg" alt="hotdog" width="100%">
  </a>
  <div class="desc">This our hotdog</div>
</div> 
   <div class="gallery">
  <a target="_blank" href="images/hotdog.jpg">
    <img src="images/IMG_8479.jpg" alt="hotdog" width="100%">
  </a>
  <div class="desc">This our hotdog</div>
</div> 
      
</div>
</div>
    

    
    
<div class="footer">
  <h2>Footer</h2>
</div>
    </div>
</body>

</html>
