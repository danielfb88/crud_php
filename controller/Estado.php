<?php 
require_once('model/DAOEstado.php');

class Estado {
	private $daoEstado;

	private $id;
	private $estado;
	
    public function __construct() {
		$this->daoEstado = new DAOEstado();
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getEstado() {
		return $this->estado;
	}
	
	public function setEstado($estado) {
		$this->estado = $estado;
	}
	
	public function getTodosOsEstados() {
		$arr = $this->daoEstado->getEstados();
				
		// Gabiarra. Falta de tempo para consertar.
		if($arr != null) {			
					
			$estado = new Estado();
			$estado->setId($arr['Id']);
			$estado->setEstado($arr['Estado']);
				
			return $estado;				
		}		
	}
}