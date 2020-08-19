<?php

class DB {

	public $con;
	public $servername = "localhost";
	public $username = "id11463853_admin";
	public $password = "123456";
	public $dbname = "id11463853_mydatabase";

	function connect() {
		$con = mysql_connect("localhost","id11463853_admin","123456");

		if(!$con) {
			die("Khong ket noi duoc CSDL");
			exit();
		}
		else {
			mysql_select_db("id11463853_mydatabase");
			mysql_query(" SET NAMES UTF8");
			return $con;
		}
	}
}


?>