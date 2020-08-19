<?php

    require_once "header.php";

?>


        <!-- header end -->
		<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/789.jpg)">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>cart page</h2>
                   <!--  <ul>
                        <li><a href="#">home</a></li>
                        <li> cart page</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- shopping-cart-area start -->
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Cart</h1>
                        <span>
                            <?php
                            if(isset($_REQUEST["tensp"])) {
                                switch ($data["check"]) {
                                    case 1:
                                        echo "<h6>Xóa thành công <strong>".$_REQUEST["tensp"]."</strong></h6>";
                                        break;
                                    case 2:
                                        echo "<h6><strong>".$_REQUEST["tensp"]."</strong> còn <strong>".$data["conlai"]."</strong> sản phẩm trong kho</h6>";
                                        break;
                                    case 3:
                                        echo "<h6>Cập nhật thành công <strong>".$_REQUEST["tensp"]."</strong></h6>";
                                        break;
                                    
                                }
                            }

                            ?>
                        </span>
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Xóa</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                            <th>Cập nhật</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        if(isset($data["cart"])) {

                                            foreach ($data["cart"] as $key => $value) {

                                            
                                            while($row = mysql_fetch_array($value["chiTietSP"])) {
                                                $subtotal = $row['gia']*$value["soluong"];
                                                $total = $total + $subtotal; 
                                                ?>
                                                <tr>
                                                <form id="form2" name="form2" method="post"> 
                                                <td>
                                                
                                                <input type="hidden" id="idGH" name="idGH" value="<?php echo $value['idGH'] ?>">
                                                <input type="hidden" id="idSP" name="idSP" value="<?php echo $value['idSP'] ?>">
                                                <input type="hidden" id="tsoluong" name="tsoluong" value="<?php echo $value['soluong'] ?>">
                                                <input type="hidden" id="tensp" name="tensp" value="<?php echo $row['tensp'] ?>">
                                                <input value="Xóa" id="Delete" type="submit" name="Delete">
                                                
                                                </td>
                                                
                                                <td class="product-thumbnail">
                                                    <a href="#"><img width="85px" src="../../../img/<?php echo $row['hinhsp'] ?>" alt=""></a>
                                                </td>
                                                <td class="product-name"><a href="#"><?php echo $row['tensp'] ?> </a></td>
                                                <td class="product-price-cart"><span class="amount">$<?php echo $row['gia'] ?></span></td>
                                                <td class="product-quantity">
                                                
                                                
                                                <input value="<?php echo $value['soluong'] ?>" type="number" min="1" name="soluong">
                                                </td>
                                                <td class="product-subtotal" >$<?php echo $subtotal ?></td>
                                                
                                                
                                                <td>
                                                    <input value="Cập nhật" id="Update" type="submit" name="Update">
                                                </td>
                                                </form>
                                                
                                                
                                                </tr>
                                                <?php
                                                }
                                        }

                                    }
                                        

                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <?php
                                        echo '
                                        <ul>
                                            <li>Subtotal<span>'.$total.'</span></li>
                                             <li>VAT<span>'.$total*0.1.'</span></li>
                                            <li>Total<span>'.$total*1.1.'</span></li>
                                        </ul>';
                                        ?>
                                        <a href="/">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    require_once "footer.php";
?>