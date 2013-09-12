<?php 
require_once('model/Conexao.php');

class DAOCidade {

	public function __construct() {	}

	public function getCidadesByIdEstado($idEstado) {
		$arr = null;

		$sql = "SELECT * FROM cidade WHERE estado = '{$idEstado}'";

		try {

			$resultSet = Conexao::getInstance()->query($sql);
			$arr = $resultSet->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $arr;
	}
}
