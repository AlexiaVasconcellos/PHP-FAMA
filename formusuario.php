<!DOCTYPE html>
<html>
<head>
	<title>Formulario Usuario</title>
</head>
<body>
	<form action="addnew.php?tipo=user" method="POST">
		<h5>Novo usuário</h5>
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
			<tr>
				<td colspan="2" align="center">
					<button type="submit">Adicionar</button>
				</td>
			</tr>
		</table>
	
	</form>
</body>
</html>