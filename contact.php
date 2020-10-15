<?php 
  include 'init.php';
  include $assets . "headernav.php";
 ?>

    <!-- Start Contact-->
    <div class="contact">
        <div class="container">
        <div class="aboutTxt mr-auto pt-5">
                    <h5>Lets get in Touch!</h5>
                    <div>
                        <div class="border-bottom w-25 my-5"></div>
                        <h4 class="text">Open to conversations that lead to innovative and collaborative projects to fulfill.</h4>
                    </div>
                </div>
        </div>
    </div>
    <!-- End Contact--> 
    <!-- Start map-->
    <div class="map">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-6">
                        <div class="map-g" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13912.56635426862!2d48.0205083!3d29.336846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x665f7665ca8d5c6b!2sBricks%20integrated%20Co!5e0!3m2!1sar!2skw!4v1602144939264!5m2!1sar!2skw" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="" class="form-m">
                            <div class="form-group">
                                <label for="InputNmae">Name</label>
                                <input type="text" class="form-control" id="InputName" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Email</label>
                                <input type="email" class="form-control" id="InputEmail">
                            </div>
                            <div class="form-group">
                                <label for="InputText">Message</label>
                                <input type="text" class="form-control" id="InputMessage">
                            </div>
                            <button type="submit" class="btn-cstm">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>  
                       
    <!-- End map-->  
    <!-- Start Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 fo-p">
                    <p id="fo-c">The BRICKS INTEGRATED General Trading and Contracting Co. was established in 2011 as a limited liability company with a paid-up capital of KD 1.000.000, BRICKS INTEGRATED General Trading and Contracting Co. is a building leading company works in State of Kuwait as it provides some integrated constructions including commercial, residential and industrial building for projects of private and government sector in State of Kuwait.</p>
                </div>
                <div class="col-md-4 info">
                    <ul>
                        <li>
                            <b>Sunday- Thursday</b><br/>
                            09:00AM  - 05:00PM
                        </li>
                        <li>
                            AlQibla-Ahmed Al Jaber Street<br/>
                            Al Zumorrodah Tower-22 floor
                        </li>
                        <li>
                            <b>info@bricksintegrated.com</b>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                        <ul class="links " id="links-f">
                            <li>
                               <a href="layout/about.php">About</a> 
                            </li>
                            <li>
                                <a href="B.pdf" target="_blank">Portfolio</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li>
                                <a href="#">Conact us</a>    
                            </li>
                        </ul>
                        <ul class="links" id="links-s">
                            <li class="social">
                                <a href="#"><img  id="f-insta" src="<?php echo $img; ?>Icon-instagram.svg"/></a>
                                <a href="#"><img src="<?php echo $img; ?>Icon-feather-mail.svg"/></a>
                                <a href="#"><img src="<?php echo $img; ?>Icon feather-phone-call.svg"/></a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
<?php include $assets ."footer.php"; ?>