<?php

class Home extends Controller {
	//parameters are passed from App.php from the url.
	public function index($name = ""){
		/* @var User|null $user */
		$user = $this->model('User');
		echo "<br> in home controller, passed: $name <br> and model";
		if (isset($user)) {
			$user->name = 'Alex';	
			echo $user->name;
		}
	}
}
