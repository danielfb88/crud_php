<?php
error_reporting(E_ALL);

//var_dump($_SERVER);die;

require_once 'init.php';
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

