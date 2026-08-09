<?php

class Model {

	public function __construct () {
		//echo $database;
		$databaseFileName = __DIR__ . '/../database.php';
		if (!file_exists($databaseFileName)) {
			echo "error database file doesn't exist";
			return null;
		}
		require_once $databaseFileName;
		$db = new Database();
		$db->getDb();
	}
}
