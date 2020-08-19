<?php

	require_once "headerAdmin.php";

?>


<h3 align="center">Cập Nhật Sản Phẩm</h3>
<form id="form1" name="form1" method="post">
  <table width="566" border="0" align="center">
    <tbody>
      <tr>
        <td width="185" height="50"><label for="textfield"><h5>Tìm sản phẩm cần cập nhật :</h5></label></td>
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

<?php
	if(isset($data["idsp"])) {
?>


<form style="padding-top: 70px" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="336" border="0" align="center">
    <tbody>
      <!-- <tr>
        <td colspan="2" align="center" ><h3>Cập Nhật Sản Phẩm</h3></td>
      </tr> -->
      <tr>
      	<td colspan="2"><h6>Cập Nhật Lại Sản Phẩm: <?php echo '<strong>'.$data["tensp"].'</strong>' ?>
        </h6></td>
       </tr>
       <tr>
        <td width="172">Ten</td>
        <td width="148"><input type="text" name="tensp" id="textfield"></td>
      </tr>
      <tr>
        <td>Gia</td>
        <td ><input type="number" name="gia" id="number"></td>
      </tr>
      <tr>
        <td>Mau</td>
        <td><input type="text" name="mau" id="color"></td>
      </tr>
      <tr>
        <td>So luong</td>
        <td ><input name="soluong" type="number" id="number1" ></td>
      </tr>
      <tr>
        <td>Size</td>
        <td>
        <!-- <label for="select">Select:</label> -->
        <select name="size" id="select">
        <option value="chuachon">Chon kich co</option>
        <option value="XL">XL</option>
        <option value="XS">XS</option>
        <option value="L">L</option>
        <option value="M">M</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><label for="file">Hinh SP:</label>
        <input type="file" name="file" id="fileField"></td>
      </tr>
      <tr>
        <td>Mo ta</td>
        <td><textarea name="textarea" id="textarea"></textarea></td>
      </tr>
      <tr>
      	<input type="hidden" id="idsp" name="idsp" value="<?php echo $data['idsp'] ?>">
        <td><input type="submit" name="Update" id="submit" value="Cập nhật"></td>
        <td><input type="reset" name="reset" id="reset" value="Reset"></td>


      </tr>
    </tbody>
  </table>
</form>
<?php
	}

?>

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
                          <th>Sản phẩm cần cập nhật</th>
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
                              <td class="product-name">
                              <form id="form2" name="form2" method="post">
                              <input type="hidden" id="idsp" name="idsp" value="'.$row['id'].'">
                              <input type="hidden" id="tensp" name="tensp" value="'.$row['tensp'].'">
                              <input value="Chọn"  type="submit" name="Choose"/>
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