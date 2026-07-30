<?php

class App {
	//default controller and method run when boostratpping application.
	protected $controller = 'home';
	protected $method = 'index';
	//params from parsed url.
	protected $params = [];

	public function __construct() {
		//set the parsed url to a var.
		$url = $this->parseUrl();

		print_r($url);

		//check if the controller exists.
		if (file_exists('../app/controllers/' . $url[0] . '.php')) {
			//set controller to controller value in url.
			$this->controller = $url[0]; 
			//remove it from the array so the parameter passed to the controller only has parameter elements.
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';


		//replace this controller with a new instance of this controller, 
		//creating a new object.
		$this->controller = new $this->controller;
		//check if url 1 (method) is set:
		if (isset($url[1])) {
			//check if method exists.
			if (method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				//removing element from array so all that's left is parameters for controller.
				unset($url[1]);
				print_r($url);
			}
		}
	}

	/*
	 *gets the url value and echoes it to the screen. for example if i visit:
	 http://localhost/php/mvc/public/?url=something
	I see: "somthing"
	 */
	public function parseUrl() {
		if(isset($_GET['url'])) {
			//sanitize the url, split it up to see if a controller has been accessed or method and parameters passed in.
			//trim because if it has a trailing slash it will cause another elemnt to the array when we explode it.
			//it will automatically trim white space form the right but if we provide a character it will also trim that.
			//we use filter_var to sanitize it then FILTER_SANITIZE_URL
			//we also explode it by a forward slash which is why the trailing slash is removed. the first character is what you explode by.
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}
