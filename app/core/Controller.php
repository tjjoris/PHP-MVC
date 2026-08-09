<?php
class Controller {
/*
 *get's passed the model name as a parameter and returns the model script.
 */
	public function model(string $model): ?Model{
		//echo $database;
		$databaseFileName = __DIR__ . '/../database.php';
		if (!file_exists($databaseFileName)) {
			echo "error database file doesn't exist";
			return null;
		}
		require_once $databaseFileName;
		//echo $model;
		$modelFileName = __DIR__ . '/../models/' . $model . '.php';
		//echo "<br> model file name: $modelFileName";
		if (file_exists($modelFileName)) {
			//echo "<br>model file exists.";
			require_once $modelFileName;
			//echo "<br> required file";
			return new $model();
		}
		//echo "model file does not exist";
		//echo "<br>$modelFileName";
		return null;
	}

	/*
	 *get's passed the view name, and data for the view, and requires the view.
	 data can be accessed form the view.
	 */
	public function view(string $view,  $data = []) {
		$viewFileName = __DIR__ . '/../views/' . $view . '.php';
		//echo "<br>$viewFileName";
		if (file_exists($viewFileName)) {
			//echo "<br>view exists";
			//print_r ($data);
			require_once($viewFileName);
		}
	}
}
