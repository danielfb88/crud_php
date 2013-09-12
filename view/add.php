<?php

require_once('controller/Estado.php');
$estado = new Estado();
$arrEstados = $estado->getTodosOsEstados();

?>

		<h1>Adicionar Cliente</h1>	
		
		<form>
			<label>Nome: </label>
			<input type="text" id="tx_nome"></br>
			<label>CPF: </label>
			<input type="text" id="tx_cpf"></br>
			<label>Data de Nascimento: </label>
			<input type="text" id="tx_dataNascimento"></br>
			<label>Sexo: </label>: 
			<select id="cb_sexo">
				<option value ="M">Masculino</option>
				<option value ="F">Feminino</option>
			</select></br>

			<label>Email: </label>
			<input type="text" id="tx_email"></br>
			
			<label>Estado: </label>
				<?php 
					echo "<select id='cb_estados' onchange='buscar_cidades();'>";
					foreach($arrEstados as $estado) {
						echo "<option value ='{$estado->getId()}'>{$estado->getUF()}</option>";
					}
					echo '</select></br>';
				?>				

			<div id="cidade_load">

				<label>Cidades: </label>
				<select id="cb_cidade">
					<option value="">Selecione o estado</option>
				</select>

			</div>
		</form>

	
