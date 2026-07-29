<?php

class App {
	//default controller and method run when boostratpping application.
	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct() {
		$this->parseUrl();
	}

	/*
	 *gets the url value and echoes it to the screen. for example if i visit:
	 http://localhost/php/mvc/public/?url=something
	I see: "somthing"
	 */
	public function parseUrl() {
		if(isset($_GET['url'])) {
			echo $_GET['url'];
		}
	}
}
