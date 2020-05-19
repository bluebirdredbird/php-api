<?php
class Product{

	// database connection and table name
	private $conn;
	private $table_name = 'products';

	// object properties
	public $product_id;
	public $kind;
	public $added_date;
	public $size;
	public $origin;

	// constructor with $db as database connection
	public function __construct($db){
		$this->conn = $db;
	}

	function read(){

		// select all query
		$query = "SELECT product_id 
				  FROM products
				  WHERE product_id = 1
				  LIMIT 5;" 
						 
					

		// prepare query statement
		$stmt = $this->conn->prepare($query);

		// execute query
		$stmt->execute();

		return $stmt;
	}

}
?>