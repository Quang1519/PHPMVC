<?php

require_once "headerAdmin.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3 align="center"> Xóa Sản Phẩm</h3>
<form id="form1" name="form1" method="post">
  <table width="566" border="0" align="center">
    <tbody>
      <tr>
        <td width="185" height="50"><label for="textfield"><h5>Tìm sản phẩm cần xóa :</h5></label></td>
        <td width="180"><input type="text" name="txt" id="textfield"></td>
           
        	<td width="70">
        		<!-- <div class="btn-hover-black"> -->
        			<!-- <input type="submit" name="submit" id="submit" value="Search"> -->
        			<!-- <div class="button-box"> -->
        			<!-- <div  class="quickview-btn-cart"> -->
        			<button name="submit" type="submit" value="Submit"  >Search</button>
        		<!-- </div> -->
        	</td>
    			
      </tr>
    </tbody>
  </table>
</form>

<div class="cart-main-area pt-95 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3 >Các sản phẩm tìm thấy</h3>
            <div class="table-content table-responsive">
              <table>
                  <thead>
                      <tr>
                          <th>Hình ảnh</th>
                          <th>Tên sản phẩm</th>
                          <th>Giá</th>
                          <th>Số lượng</th>
                          <th>Size</th>
                          <th>Sản phẩm cần xóa</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $total = 0;
                      // for($i=1; $i<= count($data["SP"]); $i++) {
                      //     $kq = $data[$i];

                      if(isset($data["SP"])) {
                      	if(mysql_num_rows($data["SP"]) > 0) {
                          while($row = mysql_fetch_array($data["SP"])) {
                              $total = $total + $row['gia']*$data["SP"];
                              echo '<tr>
                              
                              <td class="product-thumbnail">
                                  <a href="#"><img width="85px" src="../../../img/'.$row['hinhsp'].'" alt=""></a>
                              </td>
                              <td class="product-name"><a href="#">'.$row['tensp'].' </a></td>
                              <td class="product-price-cart"><span class="amount">$'.$row['gia'].'</span></td>
                              <td class="product-quantity">
                                  <span class="amount">'.$row["soluong"].'</span>
                              </td>
                              <td class="product-quantity">
                                  <span class="amount">'.$row["size"].'</span>
                              </td>
                              <td class="product-quantity">
                              <form id="form2" name="form2" method="post">
                              <input type="hidden" id="idsp" name="idsp" value="'.$row['id'].'">
                              <input value="Xóa" type="submit" name="Delete"/>
                              </form>
                              </td>
                              </tr>';
                            }
                      	
	                      	
                      	}
                      	else {
								echo '<script language="javascript"> alert("Không tìm thấy sản phẩm")</script>';
	                  		}
                      
                  		}
                  		
                      
                      

                      ?>
                      
                  </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>