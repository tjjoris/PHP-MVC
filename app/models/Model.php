<?php
//Model.php
class Model {
	private Database $dbConnector;
	public function __construct () {
		//echo $database;
		$databaseFileName = __DIR__ . '/../database.php';
		if (!file_exists($databaseFileName)) {
			echo "error database file doesn't exist";
			return null;
		}
		require_once $databaseFileName;
		$this->dbConnector = new Database();
	}

	public function getDb() {
		return $this->dbConnector->getDb();
	}
}
