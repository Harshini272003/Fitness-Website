<?php
	// Variables
	$host = 'localhost';
	$user = 'root';
	$pass = 'Family.lover27';
	$db   = 'ip-2';
	
	$con = mysqli_connect($host, $user, $pass, $db);
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>