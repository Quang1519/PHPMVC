<?php
    require_once "header.php";
?>

		<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/789.jpg); background-repeat: no-repeat; ">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2> shop with us</h2>
                    <!-- <ul>
                        <li><a href="#">home</a></li>
                        <li>shop grid</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="shop-page-wrapper shop-page-padding ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar mr-50">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Search Products</h3>
                                <div class="sidebar-search">
                                    <form action="https://pctq.000webhostapp.com/" method="get" name="form">
                                        <input name="search" placeholder="Search Products..." type="text">
                                        <button name="submit" type="submit" value="search"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">size</h3>
                                <div class="product-size">
                                    <ul>
                                        <li><a href="/xl">xl</a></li>
                                        <li><a href="/xs">xs</a></li>
                                        <li><a href="/m">m</a></li>
                                        <li><a href="/l">l</a></li>
                                        <!-- <li><a href="/phpmvc/lm">lm</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget mb-50">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-wrapper res-xl res-xl-btn">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">
                                    <div class="shop-found-selector">
                                        <div class="shop-found">
                                            <?php
                                            $product = mysql_num_rows($data["SP"]);
                                            if(isset($data["key"])) {
                                                echo '<a href="/">Xem tất cả sản phẩm</a><p><span>Có '.$data["total_records"].' kết quả cho <strong>"'.$data["key"].'"</strong></span><p>';
                                            }
                                            elseif($data["check"] == 2) {
                                            
                                            echo '<a href="/">Xem tất cả sản phẩm</a><p><span>'.$product.'</span> trong số <span>'.$data["total_records"].'</span> sản phẩm</p>';
                                            }
                                            else {
                                                echo '<p><span>'.$product.'</span> trong số <span>'.$data["total_records"].' </span> sản phẩm</p>';
                                            }
                                            ?>
                                        </div>
                                        <!-- <div class="shop-selector">
                                        <form method="post" name="form1" action="">
                                            <label>Sort By : </label>
                                            
                                            <select name="select">
                                                <option value="">Default</option>
                                                <option value="AtoZ">A to Z</option>
                                                <option value=""> Z to A</option>
                                                <option value="">In Stock</option>
                                            </select> 
                                            
                                         </form>   
                                        </div> -->
                                        
                                    </div>
                                    <!-- <div class="shop-filter-tab">
                                        <div class="shop-tab nav" role=tablist>
                                            <a class="active" href="#grid-sidebar1" data-toggle="tab" role="tab" aria-selected="false">
                                                <i class="ti-layout-grid4-alt"></i>
                                            </a>
                                            <a href="#grid-sidebar2" data-toggle="tab" role="tab" aria-selected="true">
                                                <i class="ti-menu"></i>
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="shop-product-content tab-content">
                                    <div id="grid-sidebar1" class="tab-pane fade active show">
                                        <div class="row">
                                            <?php

                                                while ($row = mysql_fetch_array($data["SP"])) {
                                                echo '<div class="col-lg-6 col-md-6 col-xl-3">
                                                <div class="product-wrapper mb-30">
                                                    <div class="product-img">
                                                        <a href="/ChitietSP/'.$row['id'].'">
                                                            <img src="../../../img/'.$row['hinhsp'].'" alt="">
                                                        </a>
                                                        <div class="product-action">
                                                            
                                                            <a class="animate-top" title="Add To Cart" href="/ChitietSP/'.$row['id'].'">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="/ChitietSP/'.$row['id'].'">'.$row['tensp'].'</a></h4>
                                                        <span>$'.$row['gia'].'</span>
                                                    </div>
                                                </div>
                                           </div>';
                                            }
                                            
                                                    

                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="pagination-style mt-30 text-center">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-angle-left"></i></a></li> -->
                                <?php
                                if(empty($data["key"])) {
                                    if($data["check"] == 1) {
                                        for ($i=1; $i<=$data["total_page"] ; $i++) {
                                            if($i == $data["current_page"]) {

                                                echo '<li class="active"><a href="/'.$i.'">'.$i.'</a></li>';
                                            }
                                            else {
                                                echo '<li><a href="/'.$i.'">'.$i.'</a></li>';
                                            }
                                        }
                                    }
                                    else {
                                        for ($i=1; $i<=$data["total_page"] ; $i++) {
                                            if($i == $data["current_page"]) {

                                                echo '<li class="active"><a href="/'.$data["url"].'/'.$i.'">'.$i.'</a></li>';
                                            }
                                            else {
                                                echo '<li><a href="/'.$data["url"].'/'.$i.'">'.$i.'</a></li>';
                                            }
                                        }
                                    }
                                }


                                
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
    require_once "footer.php";
?>
