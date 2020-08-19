<?php
	class Login extends Controller {
		public function index() {
			
			

			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];

			if(isset($_POST['submit'])) {
				$dangnhap = $this->model("SanPhamModel");
				$ketqua = $dangnhap->login($username,$password);

				if($ketqua == 1) {
					header('location: https://pctq.000webhostapp.com');

				}
				elseif ($ketqua == 2) {
					header('location: https://pctq.000webhostapp.com/Admin');
				}
				else {
					echo "<script language= 'javascript'> alert('Dang nhap that bai')</script>";
				}
			}
			$this->view("login");
			
			
		}

		public function check() {
			session_start();
			$id = $_SESSION['id'];
			$user  = $_SESSION['username'];
			$pass = $_SESSION['password'];
			$phanquyen = $_SESSION['phanquyen'];


			if(isset($id) && isset($user) && isset($pass) && isset($phanquyen)) {
				$kiemtra = $this->model("SanPhamModel");
				$ketqua = $kiemtra->confirmLogin($id,$user,$pass,$phanquyen);
				if($ketqua == 1 && $phanquyen == 2) {
					// $this->view("header", array("username" => $user));
					return array("user" =>$user, "phanquyen" => $phanquyen);
				}
				else {
					return array("user" => $user);
				}
			}
			else {
				// session_start();
				session_destroy();
				
				// $ketqua = 0;
				// echo "<script language='javascript'> window.location = 'index.php' </script>";
				// $this->view("header");
				return null;
			}
		}

}


?>