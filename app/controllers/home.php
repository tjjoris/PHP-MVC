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
				$this->view('home/index', ['names' => $user->getAllNames()]);
			}
		}
		//echo "<br> just before view";
	}

	/*
	 * store method for storing data to the database.	
	 */
	public function store() {
		echo "in store";
		$value = $_POST['user-name'] ?? '';
		$user = $this->model('User');
		if (isset($user)) {
			if ($user instanceof User) {
				echo "value is " . $value;
				$user->create($value);
			}
		}
	}
	/*
	 * Other CRUD operations include:
	 * create: Create a new record from a GET request.
	 * store: Add a new record from a POST request.
	 * show($id): Read a specific record.
	 * edit($id): edit a specific record from a GET request.
	 * update($id): edit a sepecidfic record from a PUT/PATCH requst.
	 * destroy($id): delete a speific record from a DELETE request.
	 */
}
