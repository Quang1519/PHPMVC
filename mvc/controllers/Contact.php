<?php

	class Contact extends Controller {
		function index() {
			

			if(isset($_REQUEST['submit'])) {
				$name = $_REQUEST['name'];
				// $ten = $_REQUEST['ten'];
				$email = $_REQUEST['email'];
				$phone = $_REQUEST['phone'];
				$tieude = $_REQUEST['subject'];
				$noidung = $_REQUEST['noidung'];


				

				if(isset($name,$email,$phone,$tieude,$noidung)) {
					// echo $name.$email.$phone.$tieude.$noidung;
					$sanpham = $this->model("SanPhamModel");
					$sql = "INSERT INTO feedback(ten,email,sodienthoai,chude,noidung) VALUES('$name','$email','$phone','$tieude','$noidung')";
					if($sanpham->themxoasua($sql) == 1) {
						echo '<script language="javascript"> alert("Chúng tôi đã nhận phản hồi của bạn")</script>';
					}
					else {
						echo '<script language="javascript"> alert("Thất bại")</script>';
					}

				}
			}
		if(isset($_REQUEST["subscribe"])) {
			$getmail = $_REQUEST['getemail'];
			// echo $getmail;
		}
			
			$this->view("contact", $getmail);
		}
	}


?>