<?php
	

	$tipo = $_GET['tipo'];
	require 'connect.php';
	if($tipo =='func'){

		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$cep = $_POST['cep'];
		$estado = $_POST['estado'];
		$telefone = $_POST['telefone'];
		$civil = $_POST['civil'];
		$idade = $_POST['idade'];

		$query = "INSERT INTO funcionarios(nome, endereco, bairro, cidade, cep, estado, telefone, estadocivil, idade) VALUES('".$nome."', '".$endereco."', '".$bairro."', '".$cidade."', '".$cep."', '".$estado."', '".$telefone."', '".$civil."', '".$idade."')";
		$result = mysqli_query($connection, $query);
		
		if($result){
			echo 'Funcionarios adicionado!';
    		echo'<meta http-equiv="refresh" content="4; index.php">';
			
		}else{
			echo 'Erro ao adicionar funcionario';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}
	}else if($tipo == 'user'){
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		$query = "INSERT INTO usuarios(nome, usuario, senha) VALUES('".$nome."', '".$usuario."', '".$senha."')";
		$result = mysqli_query($connection, $query);
		
		if($result){
			echo 'Usuário adicionado!';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}else{
			echo 'Erro ao adicionar usuario';
			echo'<meta http-equiv="refresh" content="4; index.php">';
		}
	}else if($tipo == 'cadastro'){
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		$query = "INSERT INTO usuarios(nome, usuario, senha) VALUES('".$nome."', '".$usuario."', '".$senha."')";
		$result = mysqli_query($connection, $query);
		
		if($result){
			echo 'Usuário adicionado!';
			echo'<meta http-equiv="refresh" content="4; login.php">';
		}else{
			echo 'Erro ao adicionar usuario';
			echo'<meta http-equiv="refresh" content="4; login.php">';
		}
	}

?>