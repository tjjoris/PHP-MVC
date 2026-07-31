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

		//check if the controller exists.
		if (isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php')) {
			//set controller to controller value in url.
			$this->controller = $url[0]; 
			//remove it from the array so the parameter passed to the controller only has parameter elements.
			unset($url[0]);
		}

		require_once __DIR__ . '/../controllers/' . $this->controller . '.php';


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
			}
		}
		//note that even if the method is not set, index is the default value and that will be the method called on the controller.
//set an array even if no parameter values are left over from the url.
		//it first checks if the array values exist, so if they do not, sets it to an empty array.
		$this->params = $url? array_values($url) : []; 
		print_r($this->params);
		//now actually call the controller method with params.
		call_user_func_array([$this->controller, $this->method], $this->params);
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
