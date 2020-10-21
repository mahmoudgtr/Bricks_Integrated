<?php 
  include 'init.php';
  include $assets . "headernav.php";
 ?>

    <!-- Start Contact-->
    <div class="contact">
        <div class="container">
        <div class="aboutTxt pt-5">
                    <h5><?php echo $expr['contact-h']; ?></h5>
                    <div>
                        <div class="border-bottom w-25 my-5"></div>
                        <h4 class="text"><?php echo $expr['contact-p']; ?></h4>
                    </div>
                </div>
        </div>
    </div>
    <!-- End Contact--> 
    <!-- Start map-->
    <div class="map">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-6" style="padding: 0!important;">
                        <div class="map-g" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13912.56635426862!2d48.0205083!3d29.336846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x665f7665ca8d5c6b!2sBricks%20integrated%20Co!5e0!3m2!1sar!2skw!4v1602144939264!5m2!1sar!2skw" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="" class="form-m">
                            <div class="form-group">
                                <label for="InputNmae"><?php echo $expr['f-name']; ?></label>
                                <input type="text" class="form-control" id="InputName" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail"><?php echo $expr['f-email']; ?></label>
                                <input type="email" class="form-control" id="InputEmail">
                            </div>
                            <div class="form-group">
                                <label for="InputText"><?php echo $expr['f-message']; ?></label>
                                <input type="text" class="form-control" id="InputMessage">
                            </div>
                            <button type="submit" class="btn-cstm"><?php echo $expr['f-send']; ?></button>
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
                    <p id="fo-c"><p><?php echo $expr['about-us']; ?></p></p>
                </div>
                <div class="col-md-4 info">
                    <ul>
                        <li>
                            <b><?php echo $expr['work-days']; ?></b><br/>
                             <?php echo $expr['work-h']; ?>
                        </li>
                        <li>
                            <?php echo $expr['address']; ?>
                        </li>
                        <li>
                            <?php echo $expr['tel']; ?>
                        </li>
                        <li>
                            <b>info@bricksintegrated.com</b> 
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                        <ul class="links " id="links-f">
                            <li>
                               <a href="about.php"><?php echo $expr['about']; ?></a> 
                            </li>
                            <li>
                                <a href="B.pdf" target="_blank"><?php echo $expr['portfolio']; ?></a>
                            </li>
                            <li>
                                <a href="services.php"><?php echo $expr['services']; ?></a>
                            </li>
                            <li>
                                <a href="projects.php"><?php echo $expr['projects']; ?></a>
                            </li>
                            <li>
                                <a href="contact.php"><?php echo $expr['contact-us']; ?></a>    
                            </li>
                        </ul>
                        <ul class="links" id="links-s">
                            <li class="social">
                                <a href="https://www.instagram.com/bricksintegrated/" target="_blank"><img  id="f-insta" src="<?php echo $img; ?>Icon-instagram.svg"/></a>
                                <a href="mailto:info@bricksintegrated.com"><img src="<?php echo $img; ?>Icon-feather-mail.svg"/></a>
                                <a href="tel:00965 2220 6183"><img src="<?php echo $img; ?>Icon feather-phone-call.svg"/></a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsapp-i"><a href="https:/wa.me/+96566164502" target="_blank"><div class="whatsapp-i-p"></div><img src="img/Icon awesome-whatsapp.svg"></div></a>
    <!-- End Footer -->
<?php include $assets ."footer.php"; ?>