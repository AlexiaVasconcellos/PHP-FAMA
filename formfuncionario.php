<!DOCTYPE html>
<html>
<head>
	<title>Formulario de funcionario</title>
</head>
<body>


	<form action="addnew.php?tipo=func" method="POST">
		<h5>Novo funcionário</h5>
		<table>
			<tr>
				<td>
					Nome
				</td>
				<td>
					<input type="text" name="nome" required>
				</td>
			</tr>
			<tr>
				<td>
					Endereço
				</td>
				<td>
					<input type="text" name="endereco" required>
				</td>
			</tr>
			<tr>
				<td>
					Bairro
				</td>
				<td>
					<input type="text" name="bairro" required>
				</td>
			</tr>
			<tr>
				<td>
					Cidade
				</td>
				<td>
					<input type="text" name="cidade" required>
				</td>
			</tr>
			<tr>
				<td>
					CEP
				</td>
				<td>
					<input type="text" name="cep" required>
				</td>
			</tr>
			<tr>
				<td>
					Estado
				</td>
				<td>
					<select name="estado" required>
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
					<input type="text" name="telefone" maxlength="12" required placeholder="1199999-9999">
				</td>
			</tr>
			<tr>
				<td>
					Estado Civil
				</td>
				<td>
					<select name="civil" required>
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
					<input type="number" name="idade" maxlength="3" required>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					
				</td>
			</tr>
		</table>
			<button type="submit">Adicionar</button>
	</form>

</body>
</html>
