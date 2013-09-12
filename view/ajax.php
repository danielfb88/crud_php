<?php
$action = $_GET['action'];

switch ($action) {

	// Buscar Cidades pelo ID do Estado
	case 'buscar_cidades':
		$idEstado = $_GET['id_estado'];		

		require_once '../controller/Cidade.php';
		$cidade = new Cidade();		
		$arrCidades = $cidade->getCidadesByIdEstado($idEstado);

		echo '<label>Cidades:</label>';
		echo '<select id="cb_cidade">';
		foreach($arrCidades as $cidade) {
			echo "<option value='{$cidade->getId()}'>{$cidade->getNome()}</option>";
		}
		echo '</select>';

		break;
	
	default:
		# code...
		break;
}


?>