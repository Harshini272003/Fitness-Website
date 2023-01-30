
<?php

  require_once('connect.php');

  
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass  = $_POST['password'];
 $user = "user";



  
  
  // Get password from table
  $query = mysqli_query($con, "SELECT * FROM user WHERE password= '$pass' AND email='$email' ");

  $num = mysqli_num_rows($query);
  if($num>0)
  {
      $message = "User aldready exist";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.href='register.html';</script>";
  }
  else
  {
    $insert = "insert into user values('','$name','$email','$pass','$user')";
    mysqli_query($con,$insert);
     $message = "Registration Successful";
      echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location.href='login.html';</script>";

  }



  ?>