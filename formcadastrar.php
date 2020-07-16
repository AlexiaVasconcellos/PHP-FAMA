<!DOCTYPE html>
<html>
<head>
	<title>Formulario de cadastre se</title>
</head>
<body>
	<form action="addnew.php?tipo=cadastro" method="POST">
		<h5>Cadastrar-se</h5>
		<table>
			<tr>
				<td>
					Nome Completo
				</td>
				<td>
					<input type="text" name="nome" required>
				</td>
			</tr>
			<tr>
				<td>
					usuário
				</td>
				<td>
					<input type="text" name="usuario" required>
				</td>
			</tr>
			<tr>
				<td>
					Senha
				</td>
				<td>
					<input type="password" name="senha" required>
				</td>
			</tr>
		</table>
		<button>Adicionar</button>
	</form>
</body>
</html>