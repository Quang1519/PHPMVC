<?php
	require_once "header.php";
?>

<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/789.jpg); background-repeat: no-repeat; ">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
            <h2>Account</h2>
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
            <!-- <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
            	<div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                <table  width="500" height="400" border="0" >
				  <tbody>
				    <tr>
				      <td colspan="2"><h5>Thông tin của bạn</h5></td>
				    </tr>
				    <tr>
				      <td width="165">Username:</td>
				      <td width="182">&nbsp;</td>
				    </tr>
				    <tr>
				      <td>Password:</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td>Tên:</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td>Họ đệm:</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td>Emai:</td>
				      <td>&nbsp;</td>
				    </tr>
				    <tr>
				      <td>Địa chỉ:</td>
				      <td>&nbsp;</td>
				    </tr>
				  </tbody>
				</table>
            </div>
        </div>
    </div>
</div> -->

<?php
	if(isset($data["UR"])) {
		while ($row = mysql_fetch_array($data["UR"])) {
		
?>

            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="post" name="form1" id="form1">
                            	<h5>Thông tin của bạn</h5>
                            	<label for="username">Username:</label>
                                <input type="text" name="username" placeholder="<?php echo $row["username"]  ?>">

                                <label for="password">Password:</label>
                                <input type="password" name="password" placeholder="password">

                                <label for="ten">Tên:</label>
                                <input name="ten" placeholder="<?php echo $row["ten"]  ?>" type="text">

                                <label for="hodem">Họ đệm:</label>
                                <input name="hodem" placeholder="<?php echo $row["username"]  ?>" type="text">

                                <label for="email">Email:</label>
                                <input name="email" placeholder="<?php echo $row["email"]  ?>" type="email">

                                <label for="diachi">Địa chỉ:</label>
                                <input name="diachi" placeholder="<?php echo $row["diachi"]  ?>" type="text">
                                <!-- <td><input type="submit" name="submit" id="submit" value="Submit"></td> -->
                                <div class="button-box">
                                    <button name="Update" type="submit" class="default-btn floatright">Sửa thông tin</button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
		<?php

	}
}
?>

        </div>
    </div>
</div>




<?php
	require_once "footer.php";
?>