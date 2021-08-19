<?php
class DB{
	//class members
	private $servername	=	"localhost";
	private $username	=	"marieli";
	private $password	=	"marieli";
	private $dbname		=	"marieli";
	private $conn;

	public function __construct(){
		try {
				$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		// set the PDO error mode to exception
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
		}
	catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
	}
	
	//class methods
	public function insertRow($table_name,$column_name,$column_values)
	{
		$sql="INSERT INTO $table_name ($column_name) VALUES($column_values)";
		$this->conn->exec($sql);
	}
	public function deleteRow($table_name,$pk_name,$pk_value)
	{
		$sql="DELETE FROM $table_name WHERE $pk_name = $pk_value";
		$this->conn->exec($sql);
	}
	public function selectRow($table_name){
		$sql="SELECT * FROM $table_name";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute();
	return $stmt->fetchAll();
		//Execute
	}
	public function callStoreProcedure($procedure_name,$value){
		$sql="call $procedure_name($value);";
		$this->conn->exec($sql);}
		
}//END DB

// $instanceDB = new DB();
?>