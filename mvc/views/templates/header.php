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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/running-shoe-icon-vector-3075229.png">
    
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


    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->

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
                            <a href="/">
                                <img src="assets/img/logo/2.png" alt="">
                            </a>
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a href="/">home</a>
                                       
                                    </li>
                                    
                                    <li><a href="/">shop</a>
                                       
                                    </li>
                                    <!-- <li><a href="blog.html">blog</a> -->
                                       
                                    </li>
                                    <li><a href="/Contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-cart">
                            <a class="icon-cart-furniture" href="/Cart.html">
                                <i class="ti-shopping-cart"></i>
                                <!-- <span class="shop-count-furniture green">02</span> -->
                            </a>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="/">HOME</a>
                                            
                                        </li>
                                        <!-- <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="menu-list.html">menu list</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="/">shop</a>
                                            
                                        </li>
                                        <!-- <li><a href="#">BLOG</a> -->
                                          
                                        </li>
                                        <li><a href="/contact.html">Contact</a></li>
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
								<?php
								require_once "./mvc/controllers/Login.php";
								$result = new Login();
								$kq = $result->check();
								if(isset($kq["user"])) {
                                echo '<li>Wellcome: '.$kq["user"].'</li>
                                <li><a href="/Account.html">Account</a></li>
                                <li><a href="/SignOut.html">Sign Out</a></li>';
								}
								else {
									echo '<li>Get Access: <a href="/Login.html">Login</a></li>
                                <li><a href="/Register.html">Reg </a></li>';
								}
								?>
                            </ul>
                        </div>
                        
                        <div class="furniture-search">
                            <form action="https://pctq.000webhostapp.com/" id="form1" name="form1" method="get">
                                <input placeholder="I am Searching for . . ." type="text" name="search">
                                <button name="submit" type="submit" value="Submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- <div class="furniture-wishlist">
                            <ul>
                                <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li>
                                <li><a href="wishlist.html"><i class="ti-heart"></i> Wishlist</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </header>



