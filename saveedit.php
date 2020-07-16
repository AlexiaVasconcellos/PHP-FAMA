<?php
	
	$tipo = $_GET['tipo'];

	require 'connect.php';
	if($tipo == 'func'){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$cep = $_POST['cep'];
		$estado = $_POST['estado'];
		$telefone = $_POST['telefone'];
		$civil = $_POST['civil'];
		$idade = $_POST['idade'];

		$query = "UPDATE funcionarios set nome = '".$nome."', endereco = '".$endereco."', bairro = '".$bairro."', cidade = '".$cidade."', cep = '".$cep."', estado = '".$estado."', telefone = '".$telefone."', estadocivil = '".$civil."', idade = '".$idade."' where id = '".$id."' ";
		$result = mysqli_query($connection, $query);
		if($result){
			echo 'Funcionário atualizado!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}else{
			echo 'Erro ao atualizar funcionario!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}
	}else if($tipo == 'user'){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$query = "UPDATE usuarios set nome = '".$nome."', usuario = '".$usuario."'  where id = '".$id."' ";
		$result = mysqli_query($connection, $query);
		if($result){
			echo 'Usuário atualizado!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}else{
			echo 'Erro ao atualizar usuário!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}
	}



?>