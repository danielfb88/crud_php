<?php 
include_once('../model/DAOEstado.php');

class Estado {
	private $daoEstado;

	private $id;
	private $uf;

	public function __construct() {
		$this->daoEstado = new DAOEstado();
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getUF() {
		return $this->uf;
	}

	public function setUF($uf) {
		$this->uf = $uf;
	}

	public function getTodosOsEstados() {
		$arr = $this->daoEstado->getEstados();
		$arrObjEstados = array();	

		foreach($arr as $row) {
			$estado = new Estado();
			
			$estado->setId($row['id_estado']);
			$estado->setUF($row['uf']);
			
			$arrObjEstados[] = $estado;
		}	
		
		return $arrObjEstados;
	}
}
