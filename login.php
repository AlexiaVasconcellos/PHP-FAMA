<?php
	if(!isset($_SESSION)){
		session_start();
	}

	if(isset($_SESSION['id'])){
		header("location: index.php");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
 
    <style>
    	body{
    		background-color: #c2d2d6;
    	}
    </style>
</head>
<body>
	<div>
		<br><br><br><br>
		<center>
			<header><h3>Logar no Sistema</h3></header>
		</center>
			
		<form action="validate.php" method="POST">
			<table align="center">
				<tr>
					<td>
						Usuário:
					</td>
					<td>
						<input type="text" name="user" required>
					</td>
				</tr>
				<tr>
					<td>
						Senha:
					</td>
					<td>
						<input type="password" name="password" required>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<button type="submit" >Login</button>
					</td>
				</tr>
			</table>
		</form>
		<center>
			<a href="formcadastrar.php">
				<button>Cadastrar-se</button>
			</a>
		</center>
	</div>

</body>
</html>