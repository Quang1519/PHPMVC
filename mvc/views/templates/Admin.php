<?php
 

  require_once "headerAdmin.php";
?>


<div class="cart-main-area pt-95 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3 >Tất cả các sản phẩm</h3>
            <div class="table-content table-responsive">
              <table>
                  <thead>
                      <tr>
                          <th>Hình ảnh</th>
                          <th>Tên sản phẩm</th>
                          <th>Giá</th>
                          <th>Số lượng</th>
                          <th>Size</th>
                          <th>Tổng tiền</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      // for($i=1; $i<= count($data["SP"]); $i++) {
                      //     $kq = $data[$i];
                          while($row = mysql_fetch_array($data["SP"])) {
                              $total =  $row['gia']*$row["soluong"];
                              echo '<tr>
                              
                              <td class="product-thumbnail">
                                  <img width="85px" src="../../../img/'.$row['hinhsp'].'" alt="">
                              </td>
                              <td class="product-name"><span><h6>'.$row['tensp'].' </h6></span></td>
                              <td class="product-price-cart"><span class="amount">$'.$row['gia'].'</span></td>
                              <td class="product-quantity">
                                  <span class="amount">'.$row["soluong"].'</span>
                              </td>
                              <td class="product-quantity">
                                  <span class="amount">'.$row["size"].'</span>
                              </td>
                              <td class="product-subtotal" >$'.$total.'</td>
                              </td>
                              </tr>';
                              }
                      ?>
                      
                  </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
<div class="pagination-style mt-30 text-center">
  <ul>
      <?php
      for ($i=1; $i<=$data["total_page"] ; $i++) {
        if($i == $data["current_page"]) {
            echo '<li class="active"><a href="/Admin/'.$i.'">'.$i.'</a></li>';
        }
        else {
            echo '<li><a href="/Admin/'.$i.'">'.$i.'</a></li>';
        }
      }
      ?>
  </ul>
</div>
</div>

</body>
</html>