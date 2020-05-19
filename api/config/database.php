<?php
class Database{

	// specify your own database credentials
	private $host = 'localhost';
	private $db_name = "api_db";
	private $username = "root";
	private $password = "*0A352BF6C05889AC426316207BB72E517899B8A7";
	public $conn;

	/* Change User
	DROP USER IF EXISTS 'user'@'localhost';
	CREATE USER 'user'@'localhost' IDENTIFIED BY 'pass';
	GRANT ALL PRIVILEGES ON database_name.* TO 'user'@'localhost';
	*/

	// get the database connection 
	public function getConnection(){

		$this->conn = null;

		try{
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname" . $this->db_name, $this->username, $this->password);
			$this->conn->exec("set names utf8");
		}catch(PDOException $exception){
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
}
?>