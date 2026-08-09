<?php
/*
 * database.php
 * @Author: Luke Johnson
 * loads .env files and connects to database.
 */

class Database {

	private $db;

	public function getDb() {
		$db_host = $_ENV['DB_HOST'];
		echo "DB host " . $db_host;
	}

	public function connect() {
		$db_host = $_ENV['DB_HOST'];
		$db_name = $_ENV['DB_DATABASE'];
		$db_user = $_ENV['DB_USERNAME'];
		$db_pass = $_ENV['DB_PASSWORD'];
		$db_port = $_ENV['DB_PORT'];
		//try {
			//$this->db
			//
		//}
	}
}
