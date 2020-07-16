<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "vip58991606";

	$connection = mysqli_connect($host,$user,$pass);
	mysqli_set_charset($connection,"utf8");
	if (!$connection){
	    die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'famabd');
	if (!$select_db){
	    die("Database Selection Failed" . mysqli_error($connection));
	}

?>