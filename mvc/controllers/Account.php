<?php
	class Account extends Controller {
		function index() {
			session_start();
			$username = $_SESSION["username"];
			if(isset($username)) {
				$sanpham = $this->model("SanPhamModel");
				$sql = "SELECT * FROM khachhang WHERE username = '$username' LIMIT 1";
				$ketqua = $sanpham->Search($sql);

			}

			if(isset($_REQUEST['Update'])) {
			$update = array(
				"username" => null,
				"password" => null,
				"ten" => null,
				"hodem" => null,
				"email" => null,
				"diachi" => null
			);

			foreach ($update as $key => $value) {
				$update["$key"] = $_REQUEST["$key"];
			}

			
			// $username = $_REQUEST['idsp'];
			
			$tong = 0;
			foreach ($update as $key => $value) {
				if($value != null) {
					$tong = $tong + 1;
					$sql1 = "UPDATE khachhang SET $key = '$value' WHERE username = '$username' LIMIT 1";
					$tong = $tong - $sanpham->themxoasua($sql1);

				}
			}

			echo '<script language="javascript"> alert("Cập nhật thành công vui lòng đăng nhập lại")</script>';
			session_destroy();
		}

			$this->view("account", array("UR" => $ketqua));
			
		}
	}




?>