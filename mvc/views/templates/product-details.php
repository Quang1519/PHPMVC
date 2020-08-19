<?php
    require_once "header.php";

?>

<style>
    

</style>

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <?php
        // while ($row = mysql_fetch_array($data["SP"])) {
        if(isset($data)) {
        ?>
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-70">
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="../../../img/<?php echo $data['hinhsp']?>">
                                        <img src="../../../img/<?php echo $data['hinhsp']?>" alt="">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3><?php echo $data['tensp']?></h3>
                   
                    <div class="details-price">
                        <span>$<?php echo $data['gia']?></span>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    </p> -->
                    <p><?php echo $data['mota']?></p>
                    <div class="quick-view-select">
                     <!--    <form id="form2" name="form2" method="post" >
                        <div class="select-option-part">
                            <label>Size *</label>
                            <select name="selectsize" class="select">
                                <option value="0">- Please Select -</option>
                                <option value="">xl</option>
                                <option value="">ml</option>
                                <option value="">m</option>
                                <option value="">sl</option>
                            </select>
                        </div>
                        <div class="select-option-part"> -->
                        <div style="padding-top: 7px">
                            <h6>Kích cỡ: <strong><?php echo $data['size']?></strong></h6>
                        </div>
                        <div style="padding-top: 7px">
                            <h6>Màu sắc: <strong><?php echo $data['mau']?></strong></h6>
                        </div>
                        <div style="padding-top: 7px">
                            <h6>Còn lại <strong><?php echo $data['soluong']?></strong> sản phẩm</h6>
                        </div>
                    </form>
                    </div>
                    <div class="quickview-plus-minus">
                    
                        <?php
                        if(isset($_SESSION['username'])) {
                            echo '<form id="form1" name="form1" method="post" >
                            <table width="350px">
                                <tbody>
                                <tr>
                                <td>
                                <div class="cart-plus-minus">
                                    <input type="text" value="1" min="1" name="soluong" class="cart-plus-minus-box">
                                </div>
                                </td>';
                            switch($data["check"]) {
                                    case 1:
                                        echo "<td><h6>Sản này phẩm đang trong giỏ</h6></td></tr></tbody></table>";
                                        break;
                                    case 2:
                                        echo "<td><h6>Không đủ sản phẩm</h6></td></tr></tbody></table>";
                                        break;
                                    case 3:
                                        echo "<td><h6>Thêm thành công</h6></td></tr></tbody></table>";
                                        break;
                                    case 4:
                                        echo "<td><h6>Bạn phải mua ít nhất 1 sản phẩm</h6></td></tr></tbody></table>";
                                        break;
                                    default:
                                        echo "</td></tr></tbody></table>";
                                        break;
                                }
                                    echo '
                                    <div class="button-box">
                                    <button name="submit" type="submit" value="Submit"  class="default-btn floatright">add to cart</button>
                                    </div></form>';

                                }
                                
                                else {
                                    echo
                                    '<div class="cart-plus-minus">
                                    <input type="text" value="1" min="1" name="soluong" class="cart-plus-minus-box">
                                    </div><div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="/Login.html">Đăng nhập để thêm vào giỏ</a>
                                    </div>';
                                }
                        ?>
                    
                    <!-- </form> -->
                    </div>  
                </div>
            </div>
        </div>
        <?php
            // echo $row['gia'].$row['tensp'];
        }

        ?>

    </div>
</div>
        
<?php
    require_once "footer.php";
?>
