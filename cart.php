<!DOCTYPE html>
<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION)){
    $loggedin=$_SESSION["loggedin"];
    $name=$_SESSION["name"];
    $customer_id=$_SESSION["id"];
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
    <h2></h2>  
        
<?php 
    // Include the setup.php file to establish database connection
    require_once 'setup.php';
          $sql = "SELECT accounts.surname, accounts.firstname
FROM orders 
INNER JOIN accounts ON orders.account_id=accounts.id 
WHERE accounts.id = '$customer_id'";
//print $sql;
    $stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['firstname'];
        $surname = $row['surname'];
        
    // Fetch records from the "contacts" table
    $sql = "SELECT orders.id, accounts.surname, accounts.firstname, items.name , orders.Date, items.price 
FROM orders 
INNER JOIN items ON orders.items_id=items.id 
INNER JOIN accounts ON orders.account_id=accounts.id 
WHERE accounts.id = '$customer_id'";
//print $sql;
    $stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Display the records in a table
        echo '<table>';
        echo "<tr><th> <h2>  Orders for $firstname $surname </h2></th></tr>"; 
        echo '<tr><th>Invoice</th><th>Product name</th><th>Price</th><th>Date</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            //print_r($row);
            $ordersid = $row['id'];
            echo '<tr>';
            echo '<td>' . $ordersid . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['Date'] . '</td>';
            echo '<td><a href="edit.php?id=' .$ordersid  . '">Edit</a> | <a href="delete.php?id=' . $ordersid  . '">Delete</a></td>';
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