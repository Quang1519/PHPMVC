<?php

	class SignOut extends Controller {
		public function index() {
			session_start();
			session_destroy();
			header('location: https://pctq.000webhostapp.com/');
		}
	}

?>