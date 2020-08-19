<?php

class Admin extends Controller{
	public function index() {
		$sanpham = $this->model("SanPhamModel");
		$url = explode("Admin/", $_GET["url"]);
		// echo $url[0];
		// print_r($url);
		// echo var_dump(is_numeric($url[0]."1"));
		// echo "This is Admin";
		// if(is_numeric($url[1]."1")) {

			$records = $sanpham->Search("SELECT COUNT(id) AS total FROM sanpham");
			$row = mysql_fetch_array($records);
			$total_records = $row['total'];

			$limit = 7;
			$total_page = ceil($total_records/$limit);
			$pages = $url[1];

			if($pages <= $total_page && $pages > 0) {
				$current_page = $pages;
			}
			else {
				$current_page = 1;
			}
			

			
			// echo $total_records;
			$start = ($current_page - 1) * $limit;
			// $result = $sanpham->SanPham();

			$result = $sanpham->Search("SELECT * FROM sanpham LIMIT $start, $limit");

			// print_r($result);

			// $this->view("Shop", array("SP" => $result, "total_page" => $total_page, "current_page" => $current_page, "total_records" => $total_records));
			$this->view("Admin", array("SP" => $result, "total_page" => $total_page, "current_page" => $current_page, "total_records" => $total_records ));
		// }
	}

	public function InsertData() {
		// $this->view("InsertData");
		$sanpham = $this->model("SanPhamModel");
		$tensp = $_REQUEST['tensp'];
		$gia = $_REQUEST['gia'];
		// $ngayph = $_POST['ngayph'];
		$mau = $_REQUEST['mau'];
		$soluong = $_REQUEST['soluong'];
		$size = $_REQUEST['size'];
		$mota = $_REQUEST['mota'];

		$hinh = $_FILES['file']['name'];
		$temp = $_FILES['file']['tmp_name'];
		$type = $_FILES['file']['type'];
		$sizefile = $_FILES['file']['size'];

		
		
		switch ($_REQUEST['submit']) {
		 	case 'Submit': {

		 	if(empty($tensp) || empty($gia) || empty($mau) || empty($soluong) || empty($hinh) || $size == "0" || empty($mota)) {
			echo '<script language="javascript"> alert("Chưa điền đủ thông tin")</script>';
			}
			else {
				$sanpham = $this->model("SanPhamModel");
				$result = $sanpham->InsertSP($tensp,$gia,$mau,$soluong,$size,$mota,$hinh);
				// $spMoiThem = $sanpham->Search(" SELECT * FROM sanpham ORDER BY id DESC LIMIT 1 ");

				
				// echo $result;
				// print_r($result);
				if($result == true) {

					$id_moithem = mysql_insert_id();
					$name = $id_moithem."_".$hinh;
					$up = $sanpham->UploadIMG($name,$temp,$type,$sizefile);
					if($up == 1) {
						if($sanpham->themxoasua("UPDATE sanpham SET hinhsp = '$name' WHERE id = '$id_moithem' limit 1" ) == 1 ) {
							echo '<script language="javascript"> alert("Thêm sản phẩm thành công")</script>';
						}

						}
						elseif ( $up == 2) {
							echo '<script language="javascript"> alert("File hình vượt quá 512 KB")</script>';
						}
						elseif ($up == 3){
							echo '<script language="javascript"> alert("Hình phải là file .jpg")</script>';
						}
						else {
							echo '<script language="javascript"> alert("Upload ảnh sản phẩm thất bại")</script>';
						}
					
				}
				else {
					echo '<script language="javascript"> alert("Thêm sản phẩm thất bại")</script>';
				}
			}

		 	}
		 		break;
		 }
		$this->view("InsertData", array("id" => $id_moithem,"tensp" => $tensp, "gia" => $gia, "soluong" => $soluong, "hinhsp" => $name, "size" => $size, "mota" => $mota ));
		

	}


    public function Delete() {
    	$sanpham = $this->model("SanPhamModel");
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST['txt'];
			
			// print_r($params);
			$sql = "SELECT * FROM sanpham WHERE tensp like '%$params%' OR id = '$params'";
			$record = $sanpham->Search($sql);
			// echo $record;
			// $quantity = mysql_num_rows($record);
			// if($record == 0) {
				// echo '<script language="javascript"> alert("Không tìm thấy sản phẩm")</script>';
			// }
		}

		if(isset($_REQUEST['Delete'])) {
			$idsp = $_REQUEST['idsp'];
			$sql1 = "DELETE FROM sanpham WHERE id = $idsp";
			$sanpham->themxoasua($sql1);
			// print_r($idsp);
		}

		$this->view("Delete", array("SP" => $record));

		
	}

	public function Update() {
		$sanpham = $this->model("SanPhamModel");
		if(isset($_REQUEST['submit'])) {
			$params = $_REQUEST['txt'];
			
			// print_r($params);
			$sql = "SELECT * FROM sanpham WHERE tensp like '%$params%' OR id = '$params'";
			$record = $sanpham->Search($sql);
			
			// $quantity = mysql_num_rows($record);

		}
		
		if(isset($_REQUEST['Choose'])) {
			$idsp = $_REQUEST['idsp'];
			$tensp = $_REQUEST['tensp'];
		}

		if(isset($_REQUEST['Update'])) {
			$update = array(
				"tensp" => null,
				"gia" => null,
				"mau" => null,
				"soluong" => null,
				"size" => null,
				"mota" => null
			);

			foreach ($update as $key => $value) {
				$update["$key"] = $_REQUEST["$key"];
			}

			if($update["size"] == "chuachon") {
				$update["size"] = null;
			}
			
			$idsp = $_REQUEST['idsp'];
			
			$tong = 0;
			foreach ($update as $key => $value) {
				if($value != null) {
					$tong = $tong + 1;
					$sql1 = "UPDATE sanpham SET $key = '$value' WHERE id = '$idsp' LIMIT 1";
					$tong = $tong - $sanpham->themxoasua($sql1);

				}
			}
			$temp = $_FILES['file']['tmp_name'];
			$hinh = $_FILES['file']['name'];
			if(isset($hinh)) {
				$name = $idsp."_".$hinh;
				$tong = $tong + 1;
				if($sanpham->UploadIMG($name,$temp) == 1) {
					$tong = $tong - $sanpham->themxoasua("UPDATE sanpham SET hinhsp = '$name' WHERE id = '$idsp' LIMIT 1");
				}
			}

			echo '<script language="javascript"> alert("Cập nhật thành công")</script>';
			
			
		}
		// echo $tensp.$idsp;
		$this->view("Update", array("SP" => $record, "idsp" => $idsp, "tensp" => $tensp));
	}
}



?>