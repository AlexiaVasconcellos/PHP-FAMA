

<?php
	if(!isset($_SESSION)){
		session_start();
	}
	require 'connect.php';
	

	if(!isset($_SESSION['id'])){
		echo 'faça o login primeiro!';
		header("location: login.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Funcionarios</title>
    
	<script>
		function deletarFunc(tx){
			var op = confirm("Deeja realmente deletar?");
			if(op){
				location.href = "deletar.php?id="+tx+"&tipo=func";
			}
		}
		function deletarUser(tx){
			var op = confirm("Deeja realmente deletar?");
			if(op){
				location.href = "deletar.php?id="+tx+"&tipo=user";
			}
		}
		function logout(){
			var op = confirm("Deeja realmente sair?");
			if(op){
				location.href = "logout.php";
			}
		}
	</script>
	<style>

		.logout{
			position: fixed;
			top: 5px;
			right: 5px;
			background-color: rgba(0,123,255,255);
			border-radius: 5px;
			border: 0;
			color: white;
			font-size: 19px;
			transition:0.5s;
		}
		.logout:active{
			background-color: white;
			color: #22eb22;
			transform: scale(1.5);	
		}
	</style>
</head>
<body>

<button class="logout" onclick="logout()">Logout</button>


<a href="formfuncionario.php"><button>Novo Funcionário</button></a>
<a href="formusuario.php"><button>Novo Usuário</button></a>





<div>
	<table >
		<tr>
			<td colspan="9" align="center">
				<h3>Funcionários</h3>
			</td>
		</tr>
		<tr>
			<td><b>Nome</b></td>
			<td><b>Endereço</b></td>
			<td><b>Bairro</b></td>
			<td><b>Cidade</b></td>
			<td><b>CEP</b></td>
			<td><b>Estado</b></td>
			<td><b>Telefone</b></td>
			<td><b>Estado Civil</b></td>
			<td><b>Idade</b></td>
			<td><b>Ação</b></td>
		</b></tr>
		<?php
			$query = "SELECT * FROM funcionarios";
			$result = mysqli_query($connection, $query);
			$result->data_seek(0);
			while($row = $result->fetch_assoc()){
				echo "
				<tr>
					<td>".$row['nome']."</td>
					<td>".$row['endereco']."</td>
					<td>".$row['bairro']."</td>
					<td>".$row['cidade']."</td>
					<td>".$row['cep']."</td>
					<td>".$row['estado']."</td>
					<td>".$row['telefone']."</td>
					<td>".$row['estadocivil']."</td>
					<td>".$row['idade']."</td>		
					<td>
						<a href='editar.php?tipo=func&id=".$row['id']."'>
							<button>Editar</button>
						</a>
					
						<button onclick='deletarFunc(".$row['id'].")'>X</button>
					</td>
				</tr>";
			}

		?>
	</table>



	<table>
		<tr>
			<td colspan="9" align="center">
				<h3>Usuários</h3>
			</td>
		</tr>
		<tr>
			<td><b>Código usuário</b></td>
			<td><b>Nome</b></td>
			<td><b>Usuário</b></td>
			<td><b>Ação</b></td>
		</tr>
		<?php
			$query = "SELECT * FROM usuarios where status = 1";
			$result = mysqli_query($connection, $query);
			$result->data_seek(0);
			while($row = $result->fetch_assoc()){
				echo "
				<tr>
					<td>".$row['id']."</td>
					<td>".$row['nome']."</td>
					<td>".$row['usuario']."</td>
					<td>
						<a href='editar.php?tipo=user&id=".$row['id']."'>
							<button>Editar</button>
						</a>
						<button onclick='deletarUser(".$row['id'].")'>X</button>
					</td>
				</tr>";
			}

		?>
	</table>
</div>
</body>
</html>