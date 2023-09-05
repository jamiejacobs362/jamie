<!DOCTYPE html>
<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION)){
    $loggedin=$_SESSION["loggedin"];
    $name=$_SESSION["name"];
    $id=$_SESSION["id"];
}
else{header('Location: phplogin/index.html');}
?>
<html lang="en">

<head>
<title>Kura Canteen-admin Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }


        tr:hover {
            background-color: #f5f5f5;
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
    <h2>Welcome to <br> Kura Canteen</h2>  
        
<?php 
    // Include the setup.php file to establish database connection
    require_once 'setup.php';
    // Fetch records from the "contacts" table
    $sql = "SELECT * FROM contacts";
    $stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Display the records in a table
        echo '<table>';
        echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Comment</th><th>Actions</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['comment'] . '</td>';
            echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a> | <a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
                echo '</tr>';
        }
        echo '</table>';
} else {
        echo 'No records found.';
    }
// Close the statement and database connection
 mysqli_stmt_close($stmt);
mysqli_close($conn)


    
?>        
</div>
</div>

<?php
include "footer.php";
?>
    </div>
</body>

</html>