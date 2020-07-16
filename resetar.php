<?php
	
	require 'connect.php';


	$id = $_GET['id'];

	$query = "UPDATE usuarios set senha = '12345678' where id = '".$id."' ";
	$result = mysqli_query($connection, $query);
	if($result){
		echo 'senha resetada, nova senha: 12345678';
	}else{
		echo 'erro ao resetar senha';
	}
     echo'<meta http-equiv="refresh" content="4; index.php">';

?>