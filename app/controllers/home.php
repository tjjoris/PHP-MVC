<?php

class Home extends Controller {
	//parameters are passed from App.php from the url.
	public function index($name = "", $name2 = "") {
		echo " <br> in home controller <br> $name <br> $name2";
	}
}
