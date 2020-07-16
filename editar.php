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
	<title>Editar</title>
    
	<script>
		function resetar(tx){
			var op = confirm("Deseja realmente resetar a senha?");
			if(op){
				location.href = "resetar.php?id="+tx;
			}
		}
	</script>
</head>
<body>
	<?php

		$tipo = $_GET['tipo'];
		if($tipo=='func'){
			$id = $_GET['id'];
			$query = "SELECT * FROM funcionarios where id = '".$id."'";
			$result = mysqli_query($connection, $query);
			$result->data_seek(0);
			$row = $result->fetch_assoc();
			?>
			<center>
				<header>
					<h4>Editar Funcionário</h4>
				</header>
				<form action="saveedit.php?tipo=func" method="POST">
		
					<table style="width: 500px">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

						<tr>
							<td>
								Nome
							</td>
							<td>
								<input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								Endereço
							</td>
							<td>
								<input type="text" name="endereco" value="<?php echo $row['endereco']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								Bairro
							</td>
							<td>
								<input type="text" name="bairro" value="<?php echo $row['bairro']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								Cidade
							</td>
							<td>
								<input type="text" name="cidade" value="<?php echo $row['cidade']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								CEP
							</td>
							<td>
								<input type="text" name="cep" value="<?php echo $row['cep']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								Estado
							</td>
							<td>
								<select name="estado" required id="estado">
									<option value="AC">Acre</option>
								    <option value="AL">Alagoas</option>
								    <option value="AP">Amapá</option>
								    <option value="AM">Amazonas</option>
								    <option value="BA">Bahia</option>
								    <option value="CE">Ceará</option>
								    <option value="DF">Distrito Federal</option>
								    <option value="ES">Espírito Santo</option>
								    <option value="GO">Goiás</option>
								    <option value="MA">Maranhão</option>
								    <option value="MT">Mato Grosso</option>
								    <option value="MS">Mato Grosso do Sul</option>
								    <option value="MG">Minas Gerais</option>
								    <option value="PA">Pará</option>
								    <option value="PB">Paraíba</option>
								    <option value="PR">Paraná</option>
								    <option value="PE">Pernambuco</option>
								    <option value="PI">Piauí</option>
								    <option value="RJ">Rio de Janeiro</option>
								    <option value="RN">Rio Grande do Norte</option>
								    <option value="RS">Rio Grande do Sul</option>
								    <option value="RO">Rondônia</option>
								    <option value="RR">Roraima</option>
								    <option value="SC">Santa Catarina</option>
								    <option value="SP">São Paulo</option>
								    <option value="SE">Sergipe</option>
								    <option value="TO">Tocantins</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Telefone
							</td>
							<td>
								<input type="text" name="telefone" maxlength="12" required value="<?php echo $row['telefone']; ?>"  placeholder="1199999-9999">
							</td>
						</tr>
						<tr>
							<td>
								Estado Civil
							</td>
							<td>
								<select name="civil" required id="civil">
									<option value="Solteiro">Solteiro</option>
									<option value="Casado">Casado</option>
									<option value="Viúvo">Viúvo</option>
									<option value="Separado judicialmente">Separado judicialmente</option>
									<option value="Divorciado">Divorciado</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Idade
							</td>
							<td>
								<input type="number" name="idade" value="<?php echo $row['idade']; ?>"  maxlength="3" required>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit" class="btn btn-success">Salvar</button>
							</td>
						</tr>
					</table>
				</form>
			</center>
		<?php

		}else if($tipo=='user'){

			$id = $_GET['id'];
			$query = "SELECT * FROM usuarios where id = '".$id."'";
			$result = mysqli_query($connection, $query);
			$result->data_seek(0);
			$row = $result->fetch_assoc();
			?>
			<center>
				<header>
					<h4>Editar Usuário</h4>
				</header>
				<form action="saveedit.php?tipo=user" method="POST">
		
					<table style="width: 500px">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

						<tr>
							<td>
								Nome
							</td>
							<td>
								<input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								Usuário
							</td>
							<td>
								<input type="text" name="usuario" value="<?php echo $row['usuario']; ?>" required>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit">Salvar</button>
							</td>
						</tr>
					</table>
				</form>
				<?php
					echo '<button onclick="resetar('.$id.')">Resetar senha</button>';
					?>
			</center>
		<?php
		}
		?>


</body>
</html>					