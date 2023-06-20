<html>
<body>
<?php 
    print_r ($_POST);
    $lname =  $_POST["lname"];
    $fname =  $_POST["fname"];
    $email =  $_POST["email"];
    $comment =  $_POST["comment"];
    ?>
Welcome <?php print $fname; ?><br>
Your email address is: <?php echo $email; ?>
<?php
    include("setup.php");
    $sql = "INSERT INTO contacts (fname, lname, email, comment)
VALUES ('$fname', '$lname', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    ?>
    
</body>
</html> 