<?php 
require_once('model/Conexao.php');

class DAOEstado {

	public function __construct() {	}

	public function getEstados() {
		$arr = null;

		$sql = "SELECT * FROM estado";

		try {

			$resultSet = Conexao::getInstance()->query($sql);
			$arr = $resultSet->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $arr;
	}
}
