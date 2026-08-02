<?php

class Home extends Controller {
	//parameters are passed from App.php from the url.
	public function index($name = ""){
		/* @var User|null $user */
		$user = $this->model('User');
		//echo "<br> in home controller, passed: $name <br> and model";
		if (isset($user)) {
			if ($user instanceof User) {
				$user->name = $name; 
				//echo 'user exists' . $user->name;
				$this->view('home/index', ['name' => $user->name]);
			}
		}
		//echo "<br> just before view";
	}
}
