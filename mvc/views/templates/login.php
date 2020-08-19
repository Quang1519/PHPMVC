
        <?php

            require_once "header.php";

        ?>
        
        <!-- header end -->
		 <div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/789.jpg); background-repeat: no-repeat; ">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>Login</h2>
                    <<!-- ul>
                        <li><a href="#">home</a></li>
                        <li> login </li>
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- login-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                  
                                    <form id="form1" name="form1" method="post" >
                                        <input type="text" name="username" id="name" placeholder="Username">
                                        <input type="password" name="password" id="pass" placeholder="Password">
                                    
                                        <div class="button-box">
                                            <!-- <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div> -->
                                            <button name="submit" type="submit" value="Submit"  class="default-btn floatright">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- <modal> -->
    <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p>Đăng nhập thành công</p>
                <button type="button" class="btn" data-dismiss="modal" style="background: #050035; color: white ">Đóng</button>
            </div>
        </div>
    </div>
 </div> -->
 <!-- end modal -->
     

<?php 
    require_once "footer.php";
    
?>