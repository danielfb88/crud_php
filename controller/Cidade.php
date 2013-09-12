<?php 
require_once('model/DAOCidade.php');

class Cidade {
	private $daoCidade;

	private $id;
	private $idEstado;
	private $cidade;
	
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
	
	public function getCidade() {
		return $this->cidade;
	}
	
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}	
	
	public function getCidadesPorIdEstado($idEstado) {
		$arr = $this->daoCidade->getCidadesByIdEstado($idEstado);
		
		// Gabiarra. Falta de tempo para consertar.
		if($arr != null) {			
					
			$cidade = new Cidade();
			$cidade->setId($arr['Id']);
			$cidade->setEstado($arr['Estado']);
			$cidade->setCidade($arr['Cidade']);
				
			return $cidade;				
		}				
	}
	
	
}