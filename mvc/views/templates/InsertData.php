<?php

require_once "headerAdmin.php";
?>
<body>
<form  method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="336" border="0" align="center">
    <tbody>
      <tr>
        <td colspan="2" align="center" ><h3>Thêm Sản Phẩm</h3></td>
      </tr>
      <tr>
        <td width="172">Ten</td>
        <td width="172"><input type="text" name="tensp" id="textfield"></td>
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
        <option value="0">Chon kich co</option>
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
        <td><textarea name="mota" id="textarea"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
        <td><input type="reset" name="reset" id="reset" value="Reset"></td>


      </tr>
    </tbody>
  </table>
</form>

<div class="cart-main-area pt-95 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-content table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>images</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Size</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    // echo $data["id"];
                    if(isset($data["id"])) {

                    // while($row = mysql_fetch_array($data["SP"])) {
                        $total = $total + $data['gia']*$data["soluong"];
                        echo '<tr>
                        <td class="product-thumbnail">
                            <a href="#"><img width="85px" src="../../../img/'.$data['hinhsp'].'" alt=""></a>
                        </td>
                        <td class="product-name"><a href="#">'.$data['tensp'].' </a></td>
                        <td class="product-price-cart"><span class="amount">$'.$data['gia'].'</span></td>
                        <td class="product-quantity">
                            <span class="amount">'.$data["soluong"].'</span>
                        </td>
                        <td class="product-quantity">
                            <span class="amount">'.$data["size"].'</span>
                        </td>
                        <td class="product-subtotal" >$'.$total.'</td>
                        </tr>';
                        // }

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