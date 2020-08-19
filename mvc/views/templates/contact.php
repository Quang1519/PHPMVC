<?php

    require_once "header.php";

?>
        <!-- header end -->
		 <div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/789.jpg); background-repeat: no-repeat; ">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>Contact us</h2>
                    <!-- <ul>
                        <li><a href="#">home</a></li>
                        <li> contact us</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- shopping-cart-area start -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- <div class="contact-map-wrapper"> -->
                            <div class="contact-message">
                                <div class="contact-title">
                                    <h4>Contact Information</h4>
                                </div>
                                <form name="form2" id="form2" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>Name*</label>
                                                <input name="name" required type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>Email*</label>
                                                <input name="email" required="" type="email" value="<?php echo $data ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>Telephone</label>
                                                <input name="phone" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>subject</label>
                                                <input name="subject" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-textarea-style mb-30">
                                                <label>Comment*</label>
                                                <textarea class="form-control2" name="noidung" required=""></textarea>
                                            </div>
                                            
                                            <button class="submit contact-btn btn-hover" type="submit" value="submit" name="submit">
                                                Send Message 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                               
                        <!-- <p class="form-messege"></p> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-title">
                                <h4>Location and Details</h4>
                            </div>
                            <div class="contact-info">
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Địa chỉ:</span>  13 Nguyễn Văn Bảo <br> Gò Vấp.HCM</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="pe-7s-mail"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> Support@thayphuoc.com</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone: </span>  (084) 0111 112 019</p>
                                    </div>
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