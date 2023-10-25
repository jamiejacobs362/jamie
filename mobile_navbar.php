<div class="topnav">
  <a href="#home" class="active">Logo</a>
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>









<style>
 /* Style the navigation menu */
    .navbar {
    float: none;
    width: 100%;
    
}
    .navbar {
    overflow: hidden;
    background-color: #333;
    position: relative;
        } 
      
  /* Hide the links inside the navigation menu (except for logo/home) */
.navbar #myLinks {
  display: none;
}
/* Style navigation menu links */
.navbar a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}
/* Style the hamburger menu */
.navbar a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}
/* Add a grey background color on mouse-over */
.navbar  a:hover {
  background-color: #0E834C;
  color: black;
}

/* Style the active link (or home/logo) */
.active {
  background-color: #04AA6D;
  color: white;
}
    </style>
    
    
    
    
    
    