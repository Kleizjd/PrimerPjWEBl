<?php
// $localh="localhost";
// $user="root";
// $pass="";
// $db="formulario";
// $Conexion=new mysqli($localh,$user,$pass,$db); 
// if ($Conexion->connect_errno) {
//     echo "Problemas en la Conexion a MySQL: " . $Conexion->connect_error;
// }
class Conexion
{
	private $conect;
	private $connection;
	private $strquery;
	private $arrValues;
	public function __construct()
	{

		$connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
		try {
			$this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
			$this->connection = $this->conect;

			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "conexión exitosa";
		} catch (PDOException $e) {
			$this->conect = 'Error de conexión';
			echo "ERROR: " . $e->getMessage();
		}
	}

	public function conect()
	{
		return $this->conect;
	}
	public function executeSQL($sql)
	{
		if ($this->connection) {
			$result = $this->connection->query($sql);
			return $result;
		} else {
			echo "Error al elejcutar sql";
		}
	}
}
