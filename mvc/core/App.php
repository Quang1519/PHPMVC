<?php

class App {

	protected $controller = "Home";
	protected $action = "index";
	protected $params = array();


	function __construct() {
		$arr = $this->UrlProcess();
		// print_r($arr);

		if (file_exists("./mvc/controllers/$arr[0].php")) {
			require_once "./mvc/controllers/$arr[0].php";
			$this->controller = $arr[0];
			unset($arr[0]);
		}

		require_once "./mvc/controllers/$this->controller.php";
		$this->controller = new $this->controller;

		if(isset($arr[1])) {
			if (method_exists( $this->controller, $arr[1])) {
				$this->action = $arr[1];
				unset($arr[1]);
			}

			
		}

		
		if(isset($arr)) {
			$this->params = array_values($arr);
		}

		call_user_func_array(array($this->controller, $this->action), $this->params);
	}


	function UrlProcess() {
		if( isset($_GET["url"]) ) {
			$ketqua = explode(".", $_GET["url"],2);
			return explode("/",filter_var(trim($ketqua[0],"/")));

		}
	}
}


?>