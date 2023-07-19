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
        // Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the record from the "contacts" table with the given ID
    $query = "SELECT * FROM contacts WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
      if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // Display the edit form with the existing record's data
        ?>
        <!DOCTYPE html>
<html>
<head>
<title>Edit Contact</title>
</head>
<body>
<h2>Edit Contact</h2>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<label for="fname">First Name:</label>
<input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>"><br><br>
<label for="lname">Last Name:</label>
<input type="text" id="lname" name="lname" value="<?php echo $row['lname']; ?>"><br><br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
<label for="comment">Comment:</label>
<textarea id="comment" name="comment"><?php echo $row['comment']; ?></textarea><br><br>
<input type="submit" value="Update">
</form>
</body>
 </html>
<?php
          
} else {
echo 'No record found with the provided ID.';
      }
 // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo 'ID parameter not provided.';
}// Close the database connection
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