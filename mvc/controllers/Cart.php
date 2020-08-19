<?php
	class Cart extends Controller {
		public function index() {
			$sanpham = $this->model("SanPhamModel");
			session_start();
			$username = $_SESSION['username'];
			

			
			if(isset($_REQUEST['Delete'])) {
				$idGH = $_REQUEST['idGH'];
				$idSP = $_REQUEST['idSP'];
				$soluong = $_REQUEST['soluong'];
				$conlai = mysql_fetch_array($sanpham->Search("SELECT soluong FROM sanpham WHERE id = '$idSP' LIMIT 1"));
				$tralai = $conlai['soluong'] + $soluong;
				$sql1 = "DELETE FROM giohang WHERE id = $idGH";
				if($sanpham->themxoasua($sql1) == 1) {
					$sanpham->themxoasua("UPDATE sanpham SET soluong = '$tralai' WHERE id ='$idSP' LIMIT 1");
					// echo '<script language="javascript"> alert("Xóa thành công")</script>';
					$check = 1;
				}
			// print_r($idsp);
			}

			if(isset($_REQUEST['Update'])) {
				$idGH = $_REQUEST['idGH'];
				$idSP = $_REQUEST['idSP'];
				$soluong = $_REQUEST['soluong'];
				$tsoluong = $_REQUEST['tsoluong'];

				$conlai = mysql_fetch_array($sanpham->Search("SELECT soluong FROM sanpham WHERE id = '$idSP' LIMIT 1"));
				// $capnhat = ;
				$ton = $conlai['soluong'] + ($tsoluong - $soluong);
				if($ton < 0) {
					// echo '<script language="javascript"> alert("Không đủ số lượng")</script>';
					$check = 2;
				}
				else {
					// echo $soluong."_".$idGH;
					if($sanpham->themxoasua("UPDATE sanpham SET soluong = '$ton' WHERE id ='$idSP' LIMIT 1") == 1) {
						$sql2 = "UPDATE giohang SET soluong = '$soluong' WHERE id = '$idGH' LIMIT 1";
						if($sanpham->themxoasua($sql2) == 1) {
							// echo '<script language="javascript"> alert("Cập nhật thành công")</script>';
							$check = 3;
						}
					
					}
				}
			}




			$idUser = $sanpham->SearchID("SELECT id FROM khachhang WHERE username = '$username'");
			// echo $idUser;
			$cart = array();
			$cartSub = array(
				"idGH" => null ,
				"idSP" => null,
				"soluong" => null, 
				"chiTietSP" => null);

			if($idUser) {
				$kq = $sanpham->ViewCart($idUser);
				while ($row = mysql_fetch_array($kq)) {
					$cartSub["idSP"] = $row['id_sanpham'];
					$cartSub["soluong"] = $row['soluong'];
					$cartSub["idGH"] = $row['id'];
					$cartSub["chiTietSP"] = $sanpham->chiTietSP($cartSub["idSP"]);
					array_push($cart, $cartSub);
				}

			}


			$this->view("cart",array( "cart" => $cart, "check" => $check, "conlai" => $conlai['soluong']));
		

		}
			

	}

?>