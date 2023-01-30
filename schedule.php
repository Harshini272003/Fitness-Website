
<?php

  require_once('connect.php'); 
  $name = $_POST['name'];
  $height = $_POST['height'];
  $weight  = $_POST['weight'];
  $gender =$_POST['gender'];
  $category = $_POST['category'];
  $insert = "insert into cust values('$name','$height','$weight','$gender','$category')";

    mysqli_query($con,$insert);
$message = "Details saved Successfylly!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.href='diet.html';</script>";
 ?>

