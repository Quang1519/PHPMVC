<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <base href="https://pctq.000webhostapp.com/mvc/views/templates/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Muagiay</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/running-shoe-icon-vector-3075229.png.png">
    
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/easyzoom.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <style>
    button:hover, input[type=submit]:hover, input[type=reset]:hover {
      background-color: #050035;
      color: white;
    }

    button, input[type=submit], input[type=reset]{
    background-color: #626262;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }

    </style>

</head>
    <body>
        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper">
                        <div class="logo-2 furniture-logo ptb-30">
                            <h2>Wellcome Admin</h2>
                            <?php
                            require_once "./mvc/controllers/Login.php";
                            $result = new Login();
                            $kq = $result->check();
                            if(isset($kq["phanquyen"])) {
                            echo '<li><a href="/SignOut">Sign Out</a></li>';
                            }
                            
                            else {
                                // echo "header khong chui chay";
                            //   header('location: http://localhost/phpmvc/');
                               echo "<script language='javascript'> window.location = '/' </script>";
                            }

                            ?>
                            
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a href="/Admin/">Trang Chủ</a></li>
                                    <li><a href="/Admin/InsertData.html">Thêm Sản Phẩm</a>
                                       
                                    </li>
                                    <li><a href="/Admin/Delete.html">Xóa</a>
                                    </li>
                                    <li><a href="/Admin/Update.html">Cập Nhật</a>
                                       
                                    </li>
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="/Admin/">Trang Chu</a>
                                            
                                        </li>
                                        <li><a href="/Admin/InsertData.html">Them San Pham</a>
                                         
                                        </li>
                                        <li><a href="/Admin/Delete.html">Xoa</a>
                                            
                                        </li>
                                        <li><a href="/Admin/Update.html">Cap Nhat</a>
                                          
                                        </li>
                                        
                                    </ul>
                                </nav>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
                <div class="container-fluid">
                    <div class="furniture-bottom-wrapper">
                        <div class="furniture-login">
                            <ul>
								
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>

