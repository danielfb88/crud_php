<?php
error_reporting(E_ALL);

require_once 'init.php';

require_once('model/DAOEstado.php');
require_once('model/DAOCidade.php');
require_once('model/DAOCliente.php');
require_once('controller/Estado.php');
require_once('controller/Cidade.php');
require_once('controller/Cliente.php');

$action = $_GET['action'];

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Crud PHP</title>
		<script language="JavaScript" type="text/javascript" src="view/statics/jquery-1.10.2.js"></script>
		<script language="JavaScript" type="text/javascript" src="view/statics/scripts.js"></script>	
	</head>
	<body>

		<?php
		switch ($action) {
			case 'add':

				if(!empty($_POST)) {	
					//var_dump($_POST);die;
		
					$cliente = new Cliente();
					$cliente->setNome($_POST['tx_nome']);
					$cliente->setCPF($_POST['tx_cpf']);
					$cliente->setDataNascimento($_POST['tx_dataNascimento']);
					$cliente->setSexo($_POST['cb_sexo']);
					$cliente->setEmail($_POST['tx_email']);
					$cliente->setIdCidade($_POST['cb_cidade']);
					
					if($cliente->adicionar()) {
						echo '<script>alert("Adicionado com sucesso");</script>';
					} else {
						echo '<script>alert("Não foi possível adicionar!");</script>';
					}
				}

				require_once($root_path . '/view/add.php');
				break;

			case 'edt':
				require_once($root_path . '/view/edt.php');
				break;

			case 'fnd':
				require_once($root_path . '/view/fnd.php');
				break;
		}

		?>
	</body>	
</html>

