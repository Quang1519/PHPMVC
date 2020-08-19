
<?php
    require_once "header.php";

?>
<!-- header end -->
 <div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/789.jpg); background-repeat: no-repeat; ">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
            <h2>Register</h2>
            <!-- <ul>
                <li><a href="#">home</a></li>
                <li> register </li>
            </ul> -->
        </div>
    </div>
</div>
<!-- register-area start -->
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="post" name="form1" id="form1">
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <input name="ten" placeholder="Ten" type="text">
                                <input name="hodem" placeholder="Ho dem" type="text">
                                <input name="email" placeholder="Email" type="email">
                                <input name="diachi" placeholder="Dia chi" type="text">
                                <!-- <td><input type="submit" name="submit" id="submit" value="Submit"></td> -->
                                <div class="button-box">
                                    <button name="submit" type="submit" class="default-btn floatright">Register</button>
                                </div>
                            </form>
                           
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
