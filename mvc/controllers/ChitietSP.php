<?php

	class ChitietSP extends Controller {
		public function index($params) {

			$sanpham = $this->model("SanPhamModel");
			$kq = $sanpham->ChitietSP($params);
			// $ketqua = $kq;
			while ($row = mysql_fetch_array($kq)) {
				$tensp = $row['tensp'];
				$ton = $row['soluong'];
				$hinhsp = $row['hinhsp'];
				$gia = $row['gia'];
				$size = $row['size'];
				$mau = $row['mau'];
				$mota = $row["mota"];
			}
			// $soluong = $_REQUEST['soluong'];

			// $sizes = $sanpham->Search("SELECT size FROM sanpham WHERE tensp = '$tensp'");
			// $size = array();
			// while ($row = mysql_fetch_array($sizes)) {
			// 	array_push($size,$row["size"]);
				// $size = $_REQUEST['selectsize'];
			// }
			session_start();
			$username = $_SESSION['username'];
			$idUser = $sanpham->SearchID("SELECT id FROM khachhang WHERE username = '$username'");
			$check = $sanpham->CheckCart($idUser,$params);
		
			if(isset($_REQUEST['submit']) && $check == 0) {
			 	$check = 2;
			 	// $getSize = $_REQUEST['selectsize'];
				$soluong = $_REQUEST['soluong'];
				if($soluong == 0) {
					$check = 4;
				}
				elseif($ton >= $soluong) {
					$conlai = $ton-$soluong;
					if($sanpham->AddToCart($idUser,$soluong,$params,$conlai) == 1) {
						$check = 3;
					}
					// }
						
				}
				// $size = $_REQUEST['selectsize'];
				// session_start();
				// $username = $_SESSION['username'];
				// $idUser = $sanpham->SearchID("SELECT id FROM khachhang WHERE username = '$username'");
				// echo $idUser.$username.$soluong.$params;

				// switch ($addToCart) {
				// 	case 0:
				// 		echo 'da ton tai';
				// 		break;
				// 	case 2:
				// 		echo 'khong thanh cong';
				// 		break;
				// 	case 1:
				// 		echo 'thanh cong';
				// 		break;
				}
				
			// }

			$this->view("product-details", array( "tensp" => $tensp, "hinhsp" => $hinhsp,"gia" => $gia, "soluong" => $ton, "size" => $size,"mau" => $mau,"mota" => $mota ,"check" => $check));
		
		}


	}
?>