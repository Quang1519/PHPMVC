<?php

class Home extends Controller{
	function index() {
		$sanpham = $this->model("SanPhamModel");
		$url = explode("/", $_GET["url"]);

		// echo $url[0]."1";
		// echo var_dump(is_numeric($url[0]."1"));
		if(is_numeric($url[0]."1")) {

			$records = $sanpham->Search("SELECT COUNT(id) AS total FROM sanpham");
			$row = mysql_fetch_array($records);
			$total_records = $row['total'];

			$limit = 12;
			$total_page = ceil($total_records/$limit);
			$pages = $url[0];

			if($pages<=$total_page && $pages>0) {
				$current_page = $url[0];
			}
			else {
				$current_page = 1;
			}
			
			// echo $total_records;
			$start = ($current_page - 1) * $limit;
			// $result = $sanpham->SanPham();

			$result = $sanpham->Search("SELECT * FROM sanpham LIMIT $start, $limit");
			$check = 1;

		}
		else  {

			$records = $sanpham->Search("SELECT COUNT(id) AS total FROM sanpham WHERE size = '$url[0]'");
			$row = mysql_fetch_array($records);
			$total_records = $row['total'];
			// echo $total_records;

			$limit = 8;
			$total_page = ceil($total_records/$limit);

			// echo $url[0].$url[1];
			// echo $total_records;
			if($url[1]<=$total_page && $url[1]>0) {
				$current_page = $url[1];
			}
			else {
				$current_page = 1;
			}

			
			// echo $total_records;
			$start = ($current_page - 1) * $limit;
			// echo $start;
			$result = $sanpham->SanPham();
			$sql = "SELECT * FROM sanpham WHERE size = '$url[0]' LIMIT $start,$limit";

			$result = $sanpham->Search($sql);
			$check = 2;
			

			
		}

		if(isset($_GET["submit"])) {
			
			if($_GET["search"] != null) {
				$key = $_GET["search"];
				$sql = "SELECT * FROM sanpham WHERE tensp like '%$key%'";
				$result = $sanpham->Search($sql);
				$total_records = mysql_num_rows($result);
			}

			// return array("SP" => $record, "quantity" => $quantity);
		}

		$this->view("shop", array("SP" => $result, "total_page" => $total_page, "current_page" => $current_page, "total_records" => $total_records, "key" => $key, "url" => $url[0] ,"check" => $check));

		

		

		
	}
}

?>