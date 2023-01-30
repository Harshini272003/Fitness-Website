<?php
	// Connect to database

	require_once('connect.php');
	error_reporting(0);
	
	// Get variables
	$email = $_POST['email'];
	$pass  = $_POST['password'];

	
	// Get password from table
	$query = mysqli_query($con, "SELECT * FROM user WHERE password= '$pass' AND email='$email' ");
	$row = mysqli_fetch_assoc($query);


	if($row['password']==$pass && $row['usertype']=="admin")
	   { 
              echo "<script>window.location.href='adminpage.php';</script>";
	    
	   }
	  elseif ($row['password']==$pass && $row['usertype']=="user") {
	     	 $message = "Login Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
	     	 echo "<script>window.location.href='home.html';</script>";

	  }
	  else
	  {
	  	$message = "Incorrect email or password";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.href='login.html';</script>";

	  }
     
?>