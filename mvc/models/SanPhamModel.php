<?php

class SanPhamModel extends DB {
	public function GetSP() {

		return "ABC";
	}

	public function Tong($a,$b) {
		return $a+$b;
	}


	public function SanPham() {
		$link = $this->connect();
		$sql = "SELECT * FROM sanpham";
		$ketqua = mysql_query($sql,$link);
		return $ketqua;
		
	}
   
	public function InsertSP($tensp,$gia,$mau,$soluong,$size,$mota,$hinhsp) {
		$link = $this->connect();
		$sql = "INSERT INTO sanpham(tensp,gia,mau,size,soluong,mota,hinhsp) VALUES('$tensp','$gia','$mau','$size','$soluong','$mota','$hinhsp')";
		$sql1 = "SELECT tensp,gia,mau,size,soluong FROM sanpham WHERE tensp = '$tensp' AND gia = '$gia' AND mau = '$mau' AND soluong = '$soluong' AND size = '$size'";

		$ketqua = mysql_query($sql1,$link);
		if(mysql_num_rows($ketqua) != 0) {
			return false;
		}
		else {
			if(mysql_query($sql,$link)) {
			return true;
			}
		}
	}


	public function themxoasua($sql) {
		$link = $this->connect();
		if(mysql_query($sql,$link)) {
			return 1;
		}
		else {
			return 0;
		}
	}


	public function UploadIMG($name,$temp,$type,$sizefile) {
		if($type == "image/jpeg") {
			if($size <= 512*1024) {
				if(move_uploaded_file($temp, "./img/".$name)) {
					return 1;
				}
				else {
					return 0;
				}
			}
			else {
				return 2;
			}
		}
		else {
			return 3;
		}
		
	}



	public function GetUser($sql) {
		$link = $this->connect();
		$ketqua = mysql_query($sql,$link);
		$i = mysql_num_rows($ketqua);
		if($i == 0 ) {
			return 1;
		}
		else {
			return 0;
		}
	}
	



	 function login($user,$pass) {
		 $link = $this->connect();
		 $pass = md5($pass);
		 $sql = "select * from khachhang where username='$user' and password ='$pass' limit 1";
		 $ketqua = mysql_query($sql,$link);
		 $i = mysql_num_rows($ketqua);
		 
		 if($i == 1) {
			 while($row = mysql_fetch_array($ketqua)) {
				 $id = $row['id'];
				 $username = $row['username'];
				 $password = $row['password'];
				 $phanquyen = $row['phanquyen'];
				 
				 session_start();
				 $_SESSION['id'] = $id;
				 $_SESSION['username'] = $username;
				 $_SESSION['password'] = $password;
				 $_SESSION['phanquyen'] = $phanquyen;			 
				
			 }
			if($_SESSION['phanquyen'] == 2) {
			 	return 2;
			}
			else {
				 	return 1;
			}
		} 
		else {
			return 0;
		}
	}
	 
	 
	function confirmLogin($id,$user,$pass,$phanquyen) {
		 $link = $this->connect();
		 $sql = "SELECT id FROM khachhang WHERE id = '$id' AND username = '$user' AND password = '$pass' AND phanquyen = '$phanquyen'";
		 $ketqua = mysql_query($sql,$link);
		 $i = mysql_num_rows($ketqua);
		 // if($i!=1) {
			 // echo "<script language='javascript'> window.location = 'index.php' </script>";
//			 echo $i;
		 	return $i;
		 // }
		 
	 }


	public function ChitietSP($params) {
	 	$link = $this->connect();
	 	$sql = "SELECT * FROM sanpham WHERE id = '$params' ";
		$ketqua = mysql_query($sql,$link);
		if($ketqua) {
			return $ketqua;
		}
		else {
			return flase;
		}
	}


	public function Search($sql) {
		$link = $this->connect();
		return mysql_query($sql,$link);
		// $i = mysql_fetch_array($ketqua);
		// if($ketqua) {
		// 	return $ketqua;
		// }
		// else {
		// 	return 0;
		// }

	}

	public function SearchID($sql) {
		$link = $this->connect();
		$ketqua = mysql_query($sql,$link);
		$i = mysql_num_rows($ketqua);
		if($i == 1) {
			while ($row = mysql_fetch_array($ketqua)) {
				$id = $row['id']; 
			}
		return $id;
		}
		else {
			return false;
		}
	}

	public function AddToCart($idUser,$soluong,$params,$conlai) {
		$link = $this->connect();
		// $sql = "SELECT soluong FROM sanpham WHERE id = '$params'";
		// $kq = mysql_query($sql,$link);
		// if(mysql_num_rows($kq) > 0) {
		// 	return 0;
		// }
		// else {
		$sql1 = "INSERT INTO giohang(id_sanpham,soluong,id_khachhang) VALUES('$params','$soluong','$idUser')";
		$result = mysql_query($sql1,$link);
		if($result) {
			if(mysql_query("UPDATE sanpham SET soluong = '$conlai' WHERE id = '$params' LIMIT 1",$link)) {
				return 1;
			}
		}
		else {
			return 0;
		}

	}


	public function CheckCart($idUser,$params) {
		$link = $this->connect();
		$sql = "SELECT id_sanpham FROM giohang WHERE id_khachhang = '$idUser' AND id_sanpham = '$params'";
		$kq = mysql_query($sql,$link);
		if(mysql_num_rows($kq) > 0) {
			return 1;
		}
		else {
			return 0;
		}
	}

	public function ViewCart($idUser) {
		$link = $this->connect();
		$sql = "SELECT * FROM giohang WHERE id_khachhang = '$idUser'";
		$ketqua = mysql_query($sql,$link);
		return $ketqua;
	}
 
}


?>