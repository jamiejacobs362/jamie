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
</div>

<?php
include "navbar.php";
?>
 <div class="row">
    <div class="side">
        <img src="images/shelf1.jpg" alt="Shelf where food avabile is shown" width="100%">
    </div>
    <div class="main">
    <?php
// Include the setup.php file to establish database connection
require_once 'setup.php';
// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') 
         // Check if all required form fields are filled
    
    if(isset($_POST['id'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['comment'])) {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        
        // Update the record in the "contacts" table
        $query = "UPDATE contacts SET fname = ?, lname = ?, email = ?, comment = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssi", $fname, $lname, $email, $comment, $id);
        
                if(mysqli_stmt_execute($stmt)) {
            echo 'Record updated successfully.';
        } else {
            echo 'Error updating record: ' . mysqli_stmt_error($stmt);
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo 'All form fields are required.';
    }
 else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($conn);
?>


        </div>
    </div>

<div class="footer">
  <h2>Footer</h2>
</div>
    </div>
</body>

</html>