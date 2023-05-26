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
  <div class="desc">Our mac and cheese </div>
</div>
    <div class="gallery">
  <a target="_blank" href="images/water.jpg" width="100%">
    <img src="images/water.jpg" alt="water" width="100%">
  </a>
  <div class="desc">This is our water</div>
</div>
<div class="gallery">
  <a target="_blank" href="images/juicie.jpg">
    <img src="images/juicie.jpg" alt="juicie" width="100%">
  </a>
  <div class="desc">This is our water</div>
</div>
    <div class="gallery">
  <a target="_blank" href="images/juicie2.jpg">
    <img src="images/juicie2.jpg" alt="juicie" width="100%">
  </a>
  <div class="desc">This is our juicie</div>
    </div>
      <div class="gallery">
  <a target="_blank" href="images/hotdog.jpg">
    <img src="images/hotdog.jpg" alt="hotdog" width="100%">
  </a>
  <div class="desc">This is our hotdog</div>
</div> 
   <div class="gallery">
  <a target="_blank" href="images/IMG_8479.jpg">
    <img src="images/IMG_8479.jpg" alt="hotdog" width="100%">
  </a>
  <div class="desc">This is our hotdog</div>
</div> 
   <div class="gallery">
  <a target="_blank" href="images/pie.jpg">
    <img src="images/pie.jpg" alt="pie" width="100%">
  </a>
  <div class="desc">This is our pie</div>
</div>
   <div class="gallery">
  <a target="_blank" href="images/pizza.jpg">
    <img src="images/pizza.jpg" alt="pizza" width="100%">
  </a>
  <div class="desc">This is our pizza</div>
</div>
   <div class="gallery">
  <a target="_blank" href="images/popcorn.jpg">
    <img src="images/popcorn.jpg" alt="popcorn" width="100%">
  </a>
  <div class="desc">This is our popcorn</div>
</div>      
   <div class="gallery">
  <a target="_blank" href="images/pork_dumplings.jpg">
    <img src="images/pork_dumplings.jpg" alt="pork dumplings" width="100%">
  </a>
  <div class="desc">This is our pork dumplings</div>
</div>
   <div class="gallery">
  <a target="_blank" href="images/spaghetti_on_bun.jpg">
    <img src="images/spaghetti_on_bun.jpg" alt="spaghetti on a bun" width="100%">
  </a>
  <div class="desc">This is our spaghetti on a bun</div>
</div>
   <div class="gallery">
  <a target="_blank" href="images/up_&_go_banana.jpg">
    <img src="images/up_&_go_banana.jpg" alt="up & go banana" width="100%">
  </a>
  <div class="desc">This is our up and go bannana flavour</div>
</div>
   <div class="gallery">
  <a target="_blank" href="images/up_&_go_vanilla.jpg">
    <img src="images/up_&_go_vanilla.jpg" alt="up & go vanilla" width="100%">
  </a>
  <div class="desc">This is our up and go vanilla flavour</div>
</div>
      
</div>
</div>
    
    
<div class="footer">
  <h2>Footer</h2>
</div>
    </div>
</body>

</html>
