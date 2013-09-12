<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
			
			Estado: 
				<?php 
					echo '<select id="sl_estados">';
					foreach($arrEstados as $estado) {
						echo "<option value ='{$estado->getId()}'>{$estado->getUF()}</option>";
					}
					echo '</select></br>';
				?>
				

			Cidade: <input type="text" name="sl_cidades"></br>
		</form>

	</body>	
</html>
