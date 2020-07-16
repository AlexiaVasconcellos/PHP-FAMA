<?php
	
	$tipo = $_GET['tipo'];

	require 'connect.php';
	
	if($tipo == 'func'){
		$id = $_GET['id'];
		$query = "DELETE FROM funcionarios where id = '".$id."' ";
		$result = mysqli_query($connection, $query);
		if($result){
			echo 'Funcionário deletado!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}else{
			echo 'Erro ao Deletar funcionario!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}
	}else if($tipo == 'user'){
		$id = $_GET['id'];
		$query = "UPDATE usuarios set status = 0 where id = '".$id."' ";
		$result = mysqli_query($connection, $query);
		if($result){
			echo 'Usuário deletado!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}else{
			echo 'Erro ao Deletar usuário!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}
	}



?>