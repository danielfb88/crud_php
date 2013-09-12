<?php 
require_once('model/DAOCidade.php');

class Cidade {
	private $daoCidade;

	private $id;
	private $idEstado;
	private $nome;

	public function __construct() {
		$this->daoCidade = new DAOCidade();
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getIdEstado() {
		return $this->idEstado;
	}

	public function setIdEstado($idEstado) {
		$this->idEstado = $idEstado;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}	

	public function getCidadesByIdEstado($idEstado) {
		$arr = $this->daoCidade->getCidadesByIdEstado($idEstado);
		$arrObjCidades = array();	

		foreach($arr as $row) {
			$cidade = new Cidade();

			$cidade->setId($row['id_cidade']);
			$cidade->setIdEstado($row['id_estado']);
			$estado->setNome($row['nome']);

			$arrObjCidades[] = $cidade;
		}	

		return $arrObjCidade;
	}

}
