<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Conexao {
	private static $conn;

	private function __construct() { }

	public static function getInstance() {
		if(self::$conn == null) {
			try	{
				$conn = new
					PDO("pgsql:dbname=crud_php;host=localhost",
							'postgres', 'postgres');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch ( PDOException $e )	{				
				echo $e->getMessage();
			}
		}

		return $conn;		
	}

}
