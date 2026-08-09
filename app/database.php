<?php
/*
 * database.php
 * @Author: Luke Johnson
 * loads .env files and connects to database.
 */

class Database {

	private $db;

	public function __construct() {
		$this->connect();
	}

	public function connect() {
		$db_host = $_ENV['DB_HOST'];
		$db_name = $_ENV['DB_DATABASE'];
		$db_user = $_ENV['DB_USERNAME'];
		$db_pass = $_ENV['DB_PASSWORD'];
		$db_port = $_ENV['DB_PORT'];
		try {
			$this->db = new PDO(
				"mysql:host=$db_host;
				port=$db_port;
				dbname=$db_name;
				charset=utf8mb4",
				$db_user,
				$db_pass
			);
		//show errors on failed connection
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//return associative arrays by default
		$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		//use real prepared statments for added security.
		$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				echo "connected!";
		} catch (PDOException $e) {
			die("Database Error: " . $e->getMessage());
		}
	}

	public function getDb() 
	{
		return $this->db;
	}
}
