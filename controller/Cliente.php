<?php 
include_once('../model/DAOCliente.php');

class Cliente {
	private $daoCliente;

	private $id;
	private $nome;
	private $cpf;
	private $dataNascimento;
	private $sexo;
	private $email;
	private $idCidade;
	
    public function __construct() {
		$this->daoCliente = new DAOCliente();
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getCpf() {
		return $this->cpf;
	}
	
	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}
	
	public function getDataNascimento() {
		return $this->dataNascimento;
	}
	
	public function setDataNascimento($dataNascimento) {
		$this->dataNascimento = $dataNascimento;
	}
	
	public function getSexo() {
		return $this->sexo;
	}
	
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getIdCidade() {
		return $this->idCidade;
	}
	
	public function setIdCidade($idCidade) {
		$this->idCidade = $idCidade;
	}
	
	public function adicionar() {
		return $this->daoCliente->adicionar(
			$this->nome, 
			$this->cpf, 
			$this->dataNascimento, 
			$this->sexo, 
			$this->email, 
			$this->idCidade
			);		
	}
	
	public function editar() {
		return $this->daoCliente->editar(
			$this->id,
			$this->nome, 
			$this->cpf, 
			$this->dataNascimento, 
			$this->sexo, 
			$this->email, 
			$this->idCidade
			);		
	}
	
	public function excluir() {
		return $this->daoCliente->excluir($this->id);	
	}
	
	public function carregarPorId() {
		$row = $this->daoCliente->getById($this->id);
		
		if($row != null) {		
			$this->id = $row['Id'];
			$this->nome = $row['Nome'];
			$this->cpf = $row['Cpf'];
			$this->dataNascimento = $row['DataNascimento'];
			$this->sexo = $row['Sexo'];
			$this->email = $row['Email'];
			$this->idCidade = $row['Cidade'];
			
			return true;
		}
		
		return false;
	}
	
	public function carregarPorNome() {
		$row = $this->daoCliente->getByNome($this->nome);
		
		if($row != null) {
			$this->id = $row['Id'];
			$this->nome = $row['Nome'];
			$this->cpf = $row['Cpf'];
			$this->dataNascimento = $row['DataNascimento'];
			$this->sexo = $row['Sexo'];
			$this->email = $row['Email'];
			$this->idCidade = $row['Cidade'];
			
			return true;
		}
		
		return false;
	}
	
	private function debug_array($arr) {
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
		die;
	}
}
