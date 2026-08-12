<?php
/*
 *home.php extends controller.
 index function gets the model of type User, 
 shows view passing it getName from User.
 */
class Home extends Controller {
	//parameters are passed from App.php from the url.
	public function index($name = "ian"){
		/* @var User|null $user */
		$user = $this->model('User');
		//echo "<br> in home controller, passed: $name <br> and model";
		if (isset($user)) {
			if ($user instanceof User) {
				echo "first param is " . $name .  " yes ";
				//$user->name = $name; 
				$this->view('home/index', ['name' => $user->getName()]);
			}
		}
		//echo "<br> just before view";
	}
}
