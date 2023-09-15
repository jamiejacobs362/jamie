<?php
session_start();
print "session";
print_r($_SESSION); //accounts_ID
print "<br />";
print "post";
print_r($_POST); //product_ID
if (isset($_SESSION['loggedin']) ) {
    $product_id = $_POST["product_id"];
    $account_id = $_SESSION["id"];
    $date = date("Y-m-d");
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
print "<br />";    
print $account_id;
    print "<br />";
    include"setup.php"; #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)

    $sql = "INSERT INTO orders (account_id, items_id, date)
    VALUES ('$account_id', '$product_id','$date')";
    
    //print $sql; die();
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}else {
   // Incorrect password
   echo 'Incorrect username and/or password!';
   header('Location: ../admin/login.php');
   $_SESSION['message'] = "Please log in to place an order!";
            }
?>