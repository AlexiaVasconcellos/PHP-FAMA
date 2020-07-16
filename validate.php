<?php

	require 'connect.php';

	$usuario = $_POST['user'];
	$senha = $_POST['password'];

	$query = "SELECT * FROM usuarios where usuario = '".$usuario."' and senha = '".$senha."' and status = 1";
	$result = mysqli_query($connection, $query);
	$result->data_seek(0);
	$tt = mysqli_num_rows($result);
	if($tt>0){
		$row = $result->fetch_assoc();
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		echo "Logado com sucesso";
    	echo'<meta http-equiv="refresh" content="4; index.php">';
	}else{
    	echo'<meta http-equiv="refresh" content="4; login.php">';
		echo "Erro de usuario ou senha";
	}


?>