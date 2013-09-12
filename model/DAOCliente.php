<?php 
require_once('model/Conexao.php');

class DAOCliente {

	public function __construct() { }

	public function adicionar($nome, $cpf, $dataNascimento, $sexo, $email, $idCidade) {
		$statusOk = false;

		$sql = "
			INSERT INTO cliente (
					nome, 
					cpf, 
					datanascimento, 
					sexo,
					email, 
					id_cidade
					) VALUES (
						:nome,
						:cpf,
						:datanascimento,
						:sexo,
						:email,
						:id_cidade
						)
					";

		try {
			$preparedStatement = Conexao::getInstance()->prepare($sql);

			$preparedStatement->bindValue(":nome", $nome);
			$preparedStatement->bindValue(":cpf", $cpf);
			$preparedStatement->bindValue(":datanascimento", $dataNascimento);
			$preparedStatement->bindValue(":sexo", $sexo);
			$preparedStatement->bindValue(":email", $email);
			$preparedStatement->bindValue(":id_cidade", $idCidade);

			$statusOk = $preparedStatement->execute();

		} catch (Exception $e) {					
			echo $e->getMessage();
		}

		return $statusOk;	
	}

	public function editar($id, $nome, $cpf, $dataNascimento, $sexo, $email, $idCidade) {
		$statusOk = false;

		$sql = "
			UPDATE cliente 
			SET nome = :nome, 
				cpf = :cpf, 
				datanascimento = :datanascimento, 
				sexo = :sexo,
				email = :email, 
				id_cidade = :id_cidade
					WHERE 
					id = :id
					";

		try {
			$preparedStatement = Conexao::getInstance()->prepare($sql);

			$preparedStatement->bindValue(":id", $id);
			$preparedStatement->bindValue(":nome", $nome);
			$preparedStatement->bindValue(":cpf", $cpf);
			$preparedStatement->bindValue(":datanascimento", $dataNascimento);
			$preparedStatement->bindValue(":sexo", $sexo);
			$preparedStatement->bindValue(":email", $email);
			$preparedStatement->bindValue(":id_cidade", $idCidade);

			$statusOk = $preparedStatement->execute();

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $statusOk;
	}

	public function excluir($id) {
		$statusOk = false;

		$sql = "
			DELETE FROM cliente 
			WHERE 
			id = :id
			";

		try {
			$preparedStatement = Conexao::getInstance()->prepare($sql);

			$preparedStatement->bindValue(":id", $id);

			$statusOk = $preparedStatement->execute();

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $statusOk;
	}

	public function getById($id) {
		$row = null;

		$sql = "
			SELECT 
			*
			FROM cliente 
			WHERE 
			cliente.id = {$id}
		";

		try {

			$resultSet = Conexao::getInstance()->query($sql);
			$row = $resultSet->fetch(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $row;
	}

	public function getByNome($nome) {
		$nome = '%' . $nome . '%';
		$row = null;

		$sql = "
			SELECT 
			* 
			FROM cliente 
			WHERE 
			nome like :nome
			";

		try {
			$preparedStatement = Conexao::getInstance()->prepare($sql);

			$preparedStatement->bindValue(":nome", $nome);

			$preparedStatement->execute();
			$row = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $row;
	}

}
