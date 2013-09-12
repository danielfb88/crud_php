<?php
require_once('controller/Estado.php');
$estado = new Estado();
$arrEstados = $estado->getTodosOsEstados();

?>
<html>
	<head>
		<title>Adicionar Cliente</title>
	</head>
	<body>
		<h1>Adicionar Cliente</h1>	
		
		<form>
			Nome: <input type="text" name="tx_nome"></br>
			CPF: <input type="text" name="tx_cpf"></br>
			Data de Nascimento: <input type="text"
			name="tx_dataNascimento"></br>
			Sexo: 
			<select id="sl_sexo">
				<option value ="M">Masculino</option>
				<option value ="F">Feminino</option>
			</select></br>

			Email: <input type="text" name="email"></br>
			
				<select id="sl_estados">
					<?php 
						foreach($arrEstados as $estado) {
							echo "<option value ='{$estado->id}'>{$estado->uf}</option>";
						}
					?>
				</select></br>

			Cidade: <input type="text" name="sl_cidades"></br>
		</form>

	</body>	
</html>
