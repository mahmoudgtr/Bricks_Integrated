    <?php 
        include "init.php";
        include $assets . "headernav.php"; 
        ?>

      <!-- Start caption -->
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="mx-auto d-block logs" src="<?php echo $img; ?>bricks-logo.svg" alt="BRICKS INTEGRATED ">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a class="scroll-down" href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <h5 class="scroll-txt">scroll down</h5>
                    </div>
                </div>
            </div>
        </div>

      <!-- End caption -->

      <!-- Start Slider-->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo $img; ?>WASMIYA TOWER VIEWS-10.png">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $img; ?>WASMIYA TOWER VIEWS-12.png">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $img; ?>WASMIYA TOWER VIEWS-249.png">
            </div>
            </div>
        </div>
      <!-- End Slider-->
      <!-- Start Footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>The BRICKS INTEGRATED General Trading and Contracting Co. was established in 2011 as a limited liability company with a paid-up capital of KD 1.000.000, BRICKS INTEGRATED General Trading and Contracting Co. is a building leading company works in State of Kuwait as it provides some integrated constructions including commercial, residential and industrial building for projects of private and government sector in State of Kuwait.</p>
                    </div>
                    <div class="col-md-4 info">
                        <ul>
                            <li>
                                Sunday- Thursday<br/>
                                09:00AM  - 05:00PM
                            </li>
                            <li>
                                AlQibla-Ahmed Al Jaber Street<br/>
                                Al Zumorrodah Tower-22 floor
                            </li>
                            <li>
                                Tel.: +965 2220 6183/6 <br/>
                                Fax: +965 2220 6188
                            </li>
                            <li>
                                info@bricksintegrated.com 
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="links">
                            <li>
                               <a href="layout/about.php">About</a> 
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Conact us</a>    
                            </li>
                            <li class="social">
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    <?php include $assets . "footer.php"; ?>