<?php
	
	class Register extends Controller {
		function index() {
			$this->view("register");
		
			$user= $_REQUEST['username'];
			$pass = $_REQUEST['password'];
			$ten = $_REQUEST['ten'];
			$hodem = $_REQUEST['hodem'];
			$email = $_REQUEST['email'];
			$diachi = $_REQUEST['diachi'];
			$phanquyen = 1;
			

			if(isset($_REQUEST['submit'])) {
				if(empty($user) || empty($pass) || empty($ten) || empty($hodem) || empty($email) || empty($diachi)) {
			// var_dump(isset(,$gia,$mau,$soluong,$size));
				echo  '<script language="javascript" > alert("Chưa điền đủ thông tin")</script>';
			
			}
			else {
				$sanpham = $this->model("SanPhamModel");
				$sql = "SELECT * FROM khachhang WHERE username = '$user' OR email = '$email'";
				$result = $sanpham->GetUser($sql);

				if($result == 1) {
					$pass = md5($pass);
					
					$sql1 = "INSERT INTO khachhang(username,password,ten,hodem,email,diachi,phanquyen) VALUES ('$user','$pass','$ten','$hodem','$email','$diachi','$phanquyen')";
					$kq = $sanpham->themxoasua($sql1);
					if($kq == 1) {
						echo '<script language="javascript" > alert("Đăng ký thành công")</script>';
					}	
					
				}
				else {
					echo '<script language="javascript" > alert("Đăng ký không thành công")</script>';
				}
			}
			}
				

		}

	}


?>