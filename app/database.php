<?php
/*
 * database.php
 * @Author: Luke Johnson
 * loads .env files and connects to database.
 */

class Database {

	public function getDb() {
		$db_host = $_ENV['DB_HOST'];
		echo "DB host " . $db_host;
	}
}
