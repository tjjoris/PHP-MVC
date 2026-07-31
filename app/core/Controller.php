<?php
class Controller {
/*
 *get's passed the model name as a parameter and returns the model script.
 */
	public function model(string $model){
		echo "berfore require once";
		echo $model;
		$modelFileName = '../app/models/' . $model . '.php';
		echo "<br> model file name: $modelFileName";
		if (file_exists($modelFileName)) {
			echo "<br>model file exists.";
			//require_once '../app/models/' . $model . '.php';
			require_once $modelFileName;
			return new $model();
		}
		echo "model file does not exist";
		echo "<br>$modelFileName";
		return null;
	}
}
